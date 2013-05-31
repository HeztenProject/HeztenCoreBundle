<?php

namespace Hezten\CoreBundle\Model;

/**
* 	State model
*
*	@author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/

abstract class State implements StateInterface
{
	/**
	* The state id
	*/
	protected $id;

	/**
	* The state name
	*/
	protected $name;

	public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Province
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}