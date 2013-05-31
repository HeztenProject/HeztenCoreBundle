<?php

namespace Hezten\CoreBundle\Model;

/**
* 	Subject model interface
*
*	@author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/

interface SubjectInterface
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
     * Get officialShortName
     *
     * @return string 
     */
    public function getShortName();

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage();

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType();

    /**
     * Get teacher
     *
     * @return \Hezten\CoreBundle\Model\TeacherInterface
     */
    public function getTeacher();

    /**
     * Get course
     *
     * @return \Hezten\CoreBundle\Model\CourseInterface
     */
    public function getCourse();

    /**
     * Get enroled
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEnroled();
}