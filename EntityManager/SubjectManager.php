<?php

namespace Hezten\CoreBundle\EntityManager;

use Doctrine\ORM\EntityManager;

use Hezten\CoreBundle\ModelManager\SubjectManagerInterface;
use Hezten\CoreBundle\Model\TeacherInterface;
use Hezten\CoreBundle\Model\AcademicYearInterface;
use Hezten\CoreBundle\Model\CourseInterface;


/**
 * Default ORM SubjectManager.
 *
 * @author Gorka Lauzirika <gorka.lauzirika@gmail.com>
 */
class SubjectManager implements SubjectManagerInterface
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

	public function findSubjectsByTeacher(TeacherInterface $teacher, AcademicYearInterface $academicYear = null)
	{
		if($academicYear == null)
			$whereClause = "ac.current = true";
		else
			$whereClause = "ac.id = $academicYear";
		
		$query = $this->em->createQuery(
				"SELECT s, t , c, ac , cc
				FROM $this->class s JOIN s.teacher t JOIN s.course c JOIN c.academicYear ac JOIN c.category cc
				WHERE t.id = :teacherId AND $whereClause "
				) ;
		
		$query->setParameter('teacherId', $teacher->getId());
		
		return $query->getResult();
	}

    /**
     * Returns a subject collection for the given course
     * 
     * @param integer $courseId The course id
     * @return A collection of Subject
     */
    public function findSubjectsByCourse(CourseInterface $course) 
    {         
        $query = $this->em->createQuery(
                "SELECT s.id AS subjectId,s.name AS subjectName,c.id AS courseId, ay.id As academicYearId
                FROM $this->class s JOIN s.course c JOIN c.academicYear ay
                WHERE c.id = :courseId"
        );
        
        $query->setParameter('courseId', $course->getId());
        
        return $query->getResult();
    }
}