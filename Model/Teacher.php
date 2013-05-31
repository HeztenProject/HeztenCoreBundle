<?php

namespace Hezten\CoreBundle\Model;

/**
* 	Teacher model
*
*	@author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/

abstract class Teacher implements TeacherInterface
{
	protected $id;

	protected $name;

	protected $surname;

	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set name
	 *
	 * @param string $name
	 * @return Teacher
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Get name
	 *
	 * @return string 
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Set surname
	 *
	 * @param string $surname
	 * @return Teacher
	 */
	public function setSurname($surname) {
		$this->surname = $surname;

		return $this;
	}

	/**
	 * Get surname
	 *
	 * @return string 
	 */
	public function getSurname() {
		return $this->surname;
	}

}