<?php

namespace Hezten\CoreBundle\ModelManager;

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
	public function getCoursesList(AcademicYear $academicYear=null);
	
	/**
	 * Returns a subject collection for the given course
	 * 
	 * @param integer $courseId The course id
	 * @return A collection of Subject
	 */
	public function findSubjectsByCourse($courseId);

	/**
	* Find courses acording to the parameters given
	* @param string $name The name or part of the name of the course
	* @param string $orderBy (ASC or DESC) The ordering strategy
	* @param integer $page The page of the course list. (Offset)
	* @param integer $limit Amount of courses that will be returned
	* @param AcademicYear $academicYear of the courses to be shown, if none given current academic year is selected
	* @return A collection of Course
	*/
	public function findCourses($name = "", $orderBy = "ASC" , $page = 0, $limit = 30, AcademicYear $academicYear = null);