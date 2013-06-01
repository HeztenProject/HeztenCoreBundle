<?php

namespace Hezten\CoreBundle\EntityManager;

use Doctrine\ORM\EntityManager;

use Hezten\CoreBundle\ModelManager\StudentManagerInterface;
use Hezten\CoreBundle\Model\CourseInterface;
use Hezten\CoreBundle\Model\StudentInterface;
use Hezten\CoreBundle\Model\AcademicYearInterface;


/**
 * Default ORM StudentManager.
 *
 * @author Gorka Lauzirika <gorka.lauzirika@gmail.com>
 */
class StudentManager implements StudentManagerInterface
{
	/**
     * @var EntityManager
     */
    protected $em;

    /**
     * @var DocumentRepository
     */
    protected $repository;

    /**
     * @var string
     */
    protected $class;

   /**
     * Constructor.
     *
     * @param EntityManager     $em
     * @param string            $class
     */
    public function __construct(EntityManager $em, $class)
    {
        $this->em         = $em;
        $this->repository = $em->getRepository($class);
        $this->class      = $em->getClassMetadata($class)->name;
    }

	/**
	 * Filter students with the given parameters
	 * @param string $name The string used to filter students by name
	 * @param AcademicYear $academicYear where the students are enroled, if none given current academic year is selected
	 * @param integer $amount The amount of students returned
	 * @return Array of students
	 */
	public function findFilteredStudents($name,	$allStudents = false, AcademicYearInterface $academicYear = null, $amount = 10)
	{
		
		$config = $this->em->getConfiguration();
		$config->addCustomNumericFunction('CONCAT_WS', 'DoctrineExtensions\Query\Mysql\ConcatWs');
		
		if($allStudents == false)
		{
			if($academicYear == null)
				$ayWhere = "AND ay.current = true";
			else
				$ayWhere = "AND ay.id = ". $academicYear->getId();
		}
		else $ayWhere = ""	;
			
		$query = $this->em->createQuery(
				"SELECT s,e,sb,c,cc, ay
				FROM $this->class s LEFT JOIN s.enroled e LEFT JOIN e.subject sb LEFT JOIN sb.course c LEFT JOIN c.category cc LEFT JOIN c.academicYear ay
				WHERE (CONCAT_WS(' ',s.name,s.surname) LIKE :name OR CONCAT_WS('',cc.levelShortName,cc.level,c.groupName) LIKE :name) 
					". $ayWhere ."
				GROUP BY s.id 
				ORDER BY s.surname ASC, s.name ASC"
		);
		
		$query->setParameter('name','%' . $name . '%');
		$query->setMaxResults($amount);
		
		return $query->getResult();
	}
	
	/**
	 * Find the subject where the given students is enroled in the given AcademicYear
	 * @param Student $student The student
	 * @param AcademicYear $academicYear where the students is enroled, if none given current academic year is selected
	 * @return Array of Enroled
	 */
	public function findEnroledSubjects(StudentInterface $student,AcademicYearInterface $academicYear = null)
	{
		if($academicYear == null)
			$ayWhere = "ay.current = true";
		else 
			$ayWhere = "ay.id = ". $academicYear->getId();
		
		$query = $em->createQuery(
				"SELECT st, e, s, c, ay, cc
				FROM $this->class st JOIN st.enroled e JOIN e.subject s JOIN s.course c JOIN c.academicYear ay JOIN c.category cc
				WHERE st.student = :studentId AND " . $ayWhere
				);
		
		$query->setParameter('studentId',$student->getId());
		
		return $query->getResult();
	}
	
	/**
	 * Given the course finds the students enroled in it
	 * @param Course $course The course
	 * @return Array of Enroled
	 */
	public function findStudentsByCourse(CourseInterface $course)
	{
		$query = $em->createQuery(
				"SELECT s.name, s.surname, s.id
				FROM $this->class s JOIN s.enroled JOIN e.subject su JOIN su.course c 
				WHERE c.id = :courseId
				GROUP BY s.id"
		) ;
	
		$query->setParameter('courseId', $course->getId());
	
		return $query->getResult();
	}
}