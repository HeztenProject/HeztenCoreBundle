<?php

namespace Hezten\CoreBundle\Model;

/**
* 	CourseCategory model
*
*	@author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/

abstract class CourseCategory implements CourseCategoryInterface
{
	/**
	* The id of the course category
	*/
	protected $id;

	/**
	* The level name
	* Examples: 
	*	"Educación Secundaria Obligatoria"
	*	"Sixième"
	*/
	protected $levelName;
	
	/**
	* Shortened levelName
	* Examples:
	*	"ESO"
	*	"6e"
	*/
	protected $levelShortName;
	
	/*
	* Level of the category
	*/
	protected $level;

    /**
     * Set id
     *
     * @param string $id
     * @return CourseCategory
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set levelName
     *
     * @param string $levelName
     * @return CourseCategory
     */
    public function setLevelName($levelName)
    {
        $this->levelName = $levelName;
    
        return $this;
    }

    /**
     * Get levelName
     *
     * @return string 
     */
    public function getLevelName()
    {
        return $this->levelName;
    }

    /**
     * Set levelShortName
     *
     * @param string $levelShortName
     * @return CourseCategory
     */
    public function setLevelShortName($levelShortName)
    {
        $this->levelShortName = $levelShortName;
    
        return $this;
    }

    /**
     * Get levelShortName
     *
     * @return string 
     */
    public function getLevelShortName()
    {
        return $this->levelShortName;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return CourseCategory
     */
    public function setLevel($level)
    {
        $this->level = $level;
    
        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }
    

}