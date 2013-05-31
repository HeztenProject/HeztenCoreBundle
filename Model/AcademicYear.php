<?php

namespace Hezten\CoreBundle\Model;

/**
* 	AcademicYear model
*
*	@author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/

abstract class AcademicYear implements AcademicYearInterface
{
	/**
	* The id of the academicYear
	*/
	protected $id;
	
	/**
	* Short description about the academicYear 
	*/
	protected $description;
	
	/**
	* The date when the academic year starts
	*/
	protected $beginDate;
	
	/**
	* The date when the academic year finishes
	*/
	protected $finishDate;

	/**
	* Stores whether this academic year is in progress or not
	*/
	protected $current;

	/**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return AcademicYear
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set beginDate
     *
     * @param \DateTime $beginDate
     * @return AcademicYear
     */
    public function setBeginDate($beginDate)
    {
        $this->beginDate = $beginDate;
    
        return $this;
    }

    /**
     * Get beginDate
     *
     * @return \DateTime 
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * Set finishDate
     *
     * @param \DateTime $finishDate
     * @return AcademicYear
     */
    public function setFinishDate($finishDate)
    {
        $this->finishDate = $finishDate;
    
        return $this;
    }

    /**
     * Get finishDate
     *
     * @return \DateTime 
     */
    public function getFinishDate()
    {
        return $this->finishDate;
    }

    /**
     * Set current
     *
     * @param boolean $current
     * @return AcademicYear
     */
    public function setCurrent($current)
    {
        $this->current = $current;
    
        return $this;
    }

    /**
     * Get current
     *
     * @return boolean 
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
    * Get a string representation of the object
    */
    public function __toString();
}