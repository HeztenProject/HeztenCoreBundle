<?php

namespace Hezten\CoreBundle\Model;

/**
* 	Course model interface
*
*	@author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/

interface CourseInterface
{
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId();

    /**
     * Get groupName
     *
     * @return string 
     */
    public function getGroupName();

    /**
     * Get category
     *
     * @return \Hezten\CoreBundle\Model\CourseCategoryInterface 
     */
    public function getCategory();

    /**
     * Get academicYear
     *
     * @return \Hezten\CoreBundle\Model\AcademicYearInterface
     */
    public function getAcademicYear();

    /**
     * Get tutor
     *
     * @return \Hezten\CoreBundle\Entity\Teacher 
     */
    public function getTutor();
   
    /**
     * Get subjects
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubjects();
    
    /**
    * Get a string representation of the object
    * @return string
    */
    public function __toString();
}