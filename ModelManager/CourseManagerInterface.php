<?php

namespace Hezten\CoreBundle\ModelManager;

use Hezten\CoreBundle\Model\AcademicYearInterface;
use Hezten\CoreBundle\Model\TeacherInterface;
/**
 * Interface to be implemented by Course managers. This adds an additional level
 * of abstraction between your application, and the actual repository.
 *
 * All changes to Courses should happen through this interface.
 *
 * @author Gorka Lauzirika <gorka.lauzirika@gmail.com>
 */
interface CourseManagerInterface
{
	/**
	 * Returns a courses list with academic year and course category data
	 * 
	 * @param AcademicYear $academicYear of the courses to be shown, if none given current academic year is selected
	 * @return A collection of Course
	 */
	public function getCoursesList(AcademicYearInterface $academicYear=null);
	
	/**
	* Find courses acording to the parameters given
	* @param string $name The name or part of the name of the course
	* @param string $orderBy (ASC or DESC) The ordering strategy
	* @param integer $page The page of the course list. (Offset)
	* @param integer $limit Amount of courses that will be returned
	* @param AcademicYear $academicYear of the courses to be shown, if none given current academic year is selected
	* @return A collection of Course
	*/
	public function findCourses($name = "", $orderBy = "ASC" , $page = 0, $limit = 30, AcademicYearInterface $academicYear = null);

	/**
    * Find the courses where the teacher is tutoring the group
    * @param Teacher $teacher The teacher
    * @param AcademicYear $academicYear of the courses to be shown, if none given current academic year is selected
    * @return A collection of Course
    */
    public function findTutoringCourse(TeacherInterface $teacher, AcademicYearInterface $academicYear = null);
}