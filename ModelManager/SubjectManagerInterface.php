<?php

namespace Hezten\CoreBundle\ModelManager;

use Hezten\CoreBundle\Model\AcademicYearInterface;
use Hezten\CoreBundle\Model\TeacherInterface;
use Hezten\CoreBundle\Model\CourseInterface;
/**
 * Interface to be implemented by Subject managers. This adds an additional level
 * of abstraction between your application, and the actual repository.
 *
 * All changes to Subjects should happen through this interface.
 *
 * @author Gorka Lauzirika <gorka.lauzirika@gmail.com>
 */
interface SubjectManagerInterface
{
	public function findSubjectsByTeacher(TeacherInterface $teacher, AcademicYearInterface $academicYear = null);

	 /**
     * Returns a subject collection for the given course
     * 
     * @param integer $courseId The course id
     * @return A collection of Subject
     */
    public function findSubjectsByCourse(CourseInterface $course);
}