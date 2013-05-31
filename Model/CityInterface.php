<?php

namespace Hezten\CoreBundle\Model;

/**
*   City model interface
*
*   @author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/

interface CityInterface
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
     * Get state
     *
     * @return \Hezten\CoreBundle\Entity\State 
     */
    public function getProvince();

    /**
    * Get a string representation of the object
    * @return string
    */
    public function __toString();
}