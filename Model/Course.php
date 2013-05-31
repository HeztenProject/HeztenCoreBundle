<?php

namespace Hezten\CoreBundle\Model;

/**
* 	Course model
*
*	@author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/

abstract class Course implements CourseInterface
{
	/**
	* The id of the course
	*/
	private $id;
	
	/**
	 *  The category of the course (CourseCategory)
	 *
	 *	@Assert\NotBlank 
	 */
	private $category;
	
	/**
	 *  The academic year of the course (AcademicYear)
	 *
	 *	@Assert\NotBlank 
	 */
	private $academicYear;
	
	/**
	 *  The teacher responsible of the group (Teacher)
	 *	@Assert\NotBlank 
	 */
	private $tutor;
	
	/**
	 *  The differentiation between courses in the same category. 
	 *  By default the differentiation is made assigning a capital letter, but any differentiantion can be assigned.
	 *
	 *	@Assert\NotBlank 
	 */
	private $groupName;
	
	/**
	*	The subjects of the course
	*/
	private $subjects;

    

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
     * Set groupName
     *
     * @param string $groupName
     * @return Course
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
    
        return $this;
    }

    /**
     * Get groupName
     *
     * @return string 
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Set category
     *
     * @param \Hezten\CoreBundle\Entity\CourseCategory $category
     * @return Course
     */
    public function setCategory(\Hezten\CoreBundle\Entity\CourseCategory $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \Hezten\CoreBundle\Entity\CourseCategory 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set academicYear
     *
     * @param \Hezten\CoreBundle\Entity\AcademicYear $academicYear
     * @return Course
     */
    public function setAcademicYear(\Hezten\CoreBundle\Entity\AcademicYear $academicYear = null)
    {
        $this->academicYear = $academicYear;
    
        return $this;
    }

    /**
     * Get academicYear
     *
     * @return \Hezten\CoreBundle\Entity\AcademicYear 
     */
    public function getAcademicYear()
    {
        return $this->academicYear;
    }

    /**
     * Set tutor
     *
     * @param \Hezten\CoreBundle\Entity\Teacher $tutor
     * @return Course
     */
    public function setTutor(\Hezten\CoreBundle\Entity\Teacher $tutor = null)
    {
        $this->tutor = $tutor;
    
        return $this;
    }

    /**
     * Get tutor
     *
     * @return \Hezten\CoreBundle\Entity\Teacher 
     */
    public function getTutor()
    {
        return $this->tutor;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subjects = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add subjects
     *
     * @param \Hezten\CoreBundle\Entity\Subject $subjects
     * @return Course
     */
    public function addSubject(\Hezten\CoreBundle\Entity\Subject $subjects)
    {
        $this->subjects[] = $subjects;
    
        return $this;
    }

    /**
     * Remove subjects
     *
     * @param \Hezten\CoreBundle\Entity\Subject $subjects
     */
    public function removeSubject(\Hezten\CoreBundle\Entity\Subject $subjects)
    {
        $this->subjects->removeElement($subjects);
    }

    /**
     * Get subjects
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubjects()
    {
        return $this->subjects;
    }
    
    public function _toString();
}