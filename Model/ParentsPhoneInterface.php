<?php

namespace Hezten\CoreBundle\Model;

/**
*   ParentsPhone model interface
*
*   @author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/

interface ParentsPhoneInterface
{
	/**
     * Get id
     *
     * @return integer 
     */
    public function getId();

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber();
}