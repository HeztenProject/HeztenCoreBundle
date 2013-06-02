<?php

namespace Hezten\CoreBundle\ModelManager;


use Hezten\CoreBundle\Model\SubjectInterface;
/**
 * Interface to be implemented by Enroled managers. This adds an additional level
 * of abstraction between your application, and the actual repository.
 *
 * All changes to Enroleds should happen through this interface.
 *
 * @author Gorka Lauzirika <gorka.lauzirika@gmail.com>
 */
interface EnroledManagerInterface
{
	public function findEnroledBySubject(SubjectInterface $subject);
}