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
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId();

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