<?php

namespace Hezten\CoreBundle\ModelManager;

use Hezten\CoreBundle\Model\StudentInterface;

/**
 * Interface to be implemented by Parents managers. This adds an additional level
 * of abstraction between your application, and the actual repository.
 *
 * All changes to Parents should happen through this interface.
 *
 * @author Gorka Lauzirika <gorka.lauzirika@gmail.com>
 */

interface ParentsManagerInterface
{
	 /**
	 * 
	 * @param integer $studentId The id of the student
	 * @return Array of Tutors
	 */
	public function findStudentsTutors(StudentInterface $student);
}
