<?php

namespace Hezten\CoreBundle\Model;

use Symfony\Component\Validator\Constraints as Assert;
/**
* 	Subject model
*
*	@author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/

abstract class Subject implements SubjectInterface
{

	/**
	* The id of the subject
	*/
	protected $id;
	
	/** 
	 *  The name of the subject
	 *	@Assert\NotBlank()  
	 */
	protected $name;
	
	/** 
	 *  Shortened name of the subject
	 *	@Assert\NotBlank()  
	 */
	protected $shortName;
	
	/** 
	 * Teacher of the subject
	 */
	protected $teacher;
	
	/** 
	 * Course of the subject
	 */
	protected $course;
	
	/** 
	 *  Language of the subject. 
	 *  Use the Unicode Language Identifier
	 *
	 *	@Assert\NotBlank()  
	 */
	protected $language;
	
	/** 
	 *  Type of subject.
	 *  Is recomended to declare integer constant values in your class for this
	 *
	 *	@Assert\NotBlank()  
	 */
	protected $type;


	/**
	*	Students enroled in this subject
	*/
	protected $enroled;
	
	/**
     * Constructor
     */
    public function __construct()
    {
        $this->enroled = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     * @return Subject
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

    /**
     * Set shortName
     *
     * @param string $shortName
     * @return Subject
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
    
        return $this;
    }

    /**
     * Get shortName
     *
     * @return string 
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return Subject
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    
        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Subject
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set teacher
     *
     * @param \Hezten\CoreBundle\Model\TeacherInterface $teacher
     * @return Subject
     */
    public function setTeacher(\Hezten\CoreBundle\Model\TeacherInterface $teacher = null)
    {
        $this->teacher = $teacher;
    
        return $this;
    }

    /**
     * Get teacher
     *
     * @return \Hezten\CoreBundle\Model\TeacherInterface 
     */
    public function getTeacher()
    {
        return $this->teacher;
    }

    /**
     * Set course
     *
     * @param \Hezten\CoreBundle\Model\CourseInterface $course
     * @return Subject
     */
    public function setCourse(\Hezten\CoreBundle\Model\CourseInterface $course = null)
    {
        $this->course = $course;
    
        return $this;
    }

    /**
     * Get course
     *
     * @return \Hezten\CoreBundle\Model\CourseInterface 
     */
    public function getCourse()
    {
        return $this->course;
    }
    
    /**
     * Add enroled
     *
     * @param \Hezten\CoreBundle\Model\EnroledInterface $enroled
     * @return Subject
     */
    public function addEnroled(\Hezten\CoreBundle\Model\EnroledInterface $enroled)
    {
        $this->enroled[] = $enroled;
    
        return $this;
    }

    /**
     * Remove enroled
     *
     * @param \Hezten\CoreBundle\Model\EnroledInterface $enroled
     */
    public function removeEnroled(\Hezten\CoreBundle\Model\EnroledInterface $enroled)
    {
        $this->enroled->removeElement($enroled);
    }

    /**
     * Get enroled
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEnroled()
    {
        return $this->enroled;
    }

}