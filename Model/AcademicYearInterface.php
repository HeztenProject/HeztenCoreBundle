<?php

namespace Hezten\CoreBundle\Model;

/**
* 	AcademicYear model interface
*
*	@author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/

interface AcademicYearInterface
{
	 /**
     * Get id
     *
     * @return integer 
     */
    public function getId();

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription();

    /**
     * Get beginDate
     *
     * @return \DateTime 
     */
    public function getBeginDate();

    /**
     * Get finishDate
     *
     * @return \DateTime 
     */
    public function getFinishDate();

    /**
     * Get current
     *
     * @return boolean 
     */
    public function getCurrent();

    /**
    * Get a string representation of the object
    * @return string
    */
    public function __toString();

}