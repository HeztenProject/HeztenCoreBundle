<?php

namespace Hezten\CoreBundle\Model;

/**
* 	Teacher model interface
*
*	@author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/

interface TeacherInterface
{
	/**
	 * Get name
	 *
	 * @return string 
	 */
	public function getName(); 

	/**
	 * Set surname
	 *
	 * @param string $surname
	 * @return Teacher
	 */
	public function setSurname($surname);	
}