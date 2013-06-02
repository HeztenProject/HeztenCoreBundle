<?php

namespace Hezten\CoreBundle\ModelManager;

/**
 * Interface to be implemented by Teacher managers. This adds an additional level
 * of abstraction between your application, and the actual repository.
 *
 * All changes to Teachers should happen through this interface.
 *
 * @author Gorka Lauzirika <gorka.lauzirika@gmail.com>
 */
interface TeacherManagerInterface
{
	public function findFilteredTeachers($name, $amount = 10);

}