<?php

namespace Hezten\CoreBundle\EntityManager;

use Doctrine\ORM\EntityManager;

use Hezten\CoreBundle\ModelManager\CourseManagerInterface;
use Hezten\CoreBundle\Model\AcademicYearInterface;
use Hezten\CoreBundle\Model\TeacherInterface;
/**
 * Default ORM CourseManager.
 *
 * @author Gorka Lauzirika <gorka.lauzirika@gmail.com>
 */
class CourseManager implements CourseManagerInterface
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
     * Returns a courses list with academic year and course category data
     * 
     * @param AcademicYear $academicYear of the courses to be shown, if none given current academic year is selected
     * @return A collection of Course
     */
    public function getCoursesList(AcademicYearInterface $academicYear=null) 
    {
        
        if($academicYear == null)
            $whereClause = "ac.current = true";
        else
            $whereClause = "ac.id = $academicYear->getId()";
        
        $query = $this->em->createQuery(
                "SELECT c, ac, cc, t
                FROM $this->class c JOIN c.academicYear ac JOIN c.category cc JOIN c.tutor t
                WHERE $whereClause"
                );
        
        return $query->getResult();     
    }
    
    /**
    * Find courses acording to the parameters given
    * @param string $name The name or part of the name of the course
    * @param string $orderBy (ASC or DESC) The ordering strategy
    * @param integer $page The page of the course list. (Offset)
    * @param integer $limit Amount of courses that will be returned
    * @param AcademicYear $academicYear of the courses to be shown, if none given current academic year is selected
    * @return A collection of Course
    */
    public function findCourses($name = "", $orderBy = "ASC" , $page = 0, $limit = 30, AcademicYearInterface $academicYear = null)
    {      
        if($academicYear == null)
            $whereClause = "AND ay.current = true";
        else
            $whereClause = "AND ay.id = ". $academicYear->getId();
        
        
        $query = $this->em->createQuery(
                "SELECT c,t,cc, ay
                FROM $this->class c JOIN c.category cc JOIN c.tutor t JOIN c.academicYear ay
                WHERE cc.levelShortName LIKE :name $whereClause
                ORDER BY cc.levelShortName $orderBy, cc.year $orderBy, c.groupName $orderBy" 
        );
        
        $query->setParameter('name', "%$name%");
        $query->setFirstResult($page*$limit );
        $query->setMaxResults($limit);
        
        return $query->getResult();
    }

    /**
    * Find the courses where the teacher is tutoring the group
    * @param TeacherInterface $teacher The teacher
    * @param AcademicYearInterface $academicYear of the courses to be shown, if none given current academic year is selected
    * @return A collection of Course
    */
    public function findTutoringCourse(TeacherInterface $teacher, AcademicYearInterface $academicYear = null)
    {        
        if($academicYear == null)
            $whereClause = "ac.current = true";
        else
            $whereClause = "ac.id = $academicYear";
        
        $query = $this->em->createQuery(
                "SELECT c
                FROM $this->class c JOIN c.academicYear ac 
                WHERE c.tutor = :teacherId AND $whereClause "
        ) ;
        
        $query->setParameter('teacherId', $teacher->getId());
        
        return $query->getResult();
    }
}