<?php

namespace Hezten\CoreBundle\Model;

/**
* 	State model interface
*
*	@author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/

interface StateInterface
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
}