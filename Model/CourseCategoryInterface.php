<?php

namespace Hezten\CoreBundle\Model;

/**
* 	CourseCategory model interface
*
*	@author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/

interface CourseCategoryInterface
{
    /**
     * Get id
     *
     * @return string 
     */
    public function getId();

    /**
     * Get levelName
     *
     * @return string 
     */
    public function getLevelName();

    /**
     * Get year
     *
     * @return integer 
     */
    public function getLevel();

    /**
    * Get a string representation of the object
    * @return string
    */
    public function __toString();
}