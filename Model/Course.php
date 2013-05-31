<?php

namespace Hezten\CoreBundle\Model;

use Symfony\Component\Validator\Constraints as Assert;
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
	protected $id;
	
	/**
	 *  The category of the course (CourseCategory)
	 *
	 *	@Assert\NotBlank 
	 */
	protected $category;
	
	/**
	 *  The academic year of the course (AcademicYear)
	 *
	 *	@Assert\NotBlank 
	 */
	protected $academicYear;
	
	/**
	 *  The teacher responsible of the group (Teacher)
	 *	@Assert\NotBlank 
	 */
	protected $tutor;
	
	/**
	 *  The differentiation between courses in the same category. 
	 *  By default the differentiation is made assigning a capital letter, but any differentiantion can be assigned.
	 *
	 *	@Assert\NotBlank 
	 */
	protected $groupName;
	
	/**
	*	The subjects of the course
	*/
	protected $subjects;

     /**
     * Constructor
     */
    public function __construct()
    {
        $this->subjects = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @param \Hezten\CoreBundle\Model\CourseCategoryInterface $category
     * @return Course
     */
    public function setCategory(\Hezten\CoreBundle\Model\CourseCategoryInterface $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \Hezten\CoreBundle\Model\CourseCategoryInterface 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set academicYear
     *
     * @param \Hezten\CoreBundle\Model\AcademicYearInterface $academicYear
     * @return Course
     */
    public function setAcademicYear(\Hezten\CoreBundle\Model\AcademicYearInterface $academicYear = null)
    {
        $this->academicYear = $academicYear;
    
        return $this;
    }

    /**
     * Get academicYear
     *
     * @return \Hezten\CoreBundle\Model\AcademicYearInterface 
     */
    public function getAcademicYear()
    {
        return $this->academicYear;
    }

    /**
     * Set tutor
     *
     * @param \Hezten\CoreBundle\Model\TeacherInterface $tutor
     * @return Course
     */
    public function setTutor(\Hezten\CoreBundle\Model\TeacherInterface $tutor = null)
    {
        $this->tutor = $tutor;
    
        return $this;
    }

    /**
     * Get tutor
     *
     * @return \Hezten\CoreBundle\Model\TeacherInterface 
     */
    public function getTutor()
    {
        return $this->tutor;
    }
       
    /**
     * Add subjects
     *
     * @param \Hezten\CoreBundle\Model\SubjectInterface $subjects
     * @return Course
     */
    public function addSubject(\Hezten\CoreBundle\Model\SubjectInterface $subjects)
    {
        $this->subjects[] = $subjects;
    
        return $this;
    }

    /**
     * Remove subjects
     *
     * @param \Hezten\CoreBundle\Model\SubjectInterface $subjects
     */
    public function removeSubject(\Hezten\CoreBundle\Model\SubjectInterface $subjects)
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

}