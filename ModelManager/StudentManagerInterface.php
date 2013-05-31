<?php

namespace Hezten\CoreBundle\ModelManager;

/**
 * Interface to be implemented by academic year managers. This adds an additional level
 * of abstraction between your application, and the actual repository.
 *
 * All changes to academic years should happen through this interface.
 *
 * @author Gorka Lauzirika <gorka.lauzirika@gmail.com>
 */
interface StudentManagerInterface
{
	/**
	 * Filter students with the given parameters
	 * @param string $name The string used to filter students by name
	 * @param AcademicYear $academicYear where the students are enroled, if none given current academic year is selected
	 * @param integer $amount The amount of students returned
	 * @return Array of students
	 */
	public function findFilteredStudents($name,	$allStudents = false, AcademicYear $academicYear = null, $amount = 10);
	
	/**
	 * Find the subject where the given students is enroled in the given AcademicYear
	 * @param Student $student The student
	 * @param AcademicYear $academicYear where the students is enroled, if none given current academic year is selected
	 * @return Array of Enroled
	 */
	public function findEnroledSubjects(Student $student,AcademicYear $academicYear = null);
	
	/**
	 * Given the course finds the students enroled in it
	 * @param Course $course The course
	 * @return Array of Enroled
	 */
	public function findStudentsByCourse(Course $course);
}