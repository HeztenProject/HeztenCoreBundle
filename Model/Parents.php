<?php

namespace Hezten\CoreBundle\Model;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;

/**
* 	Parent model
*
*	@author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/

/**
* @DoctrineAssert\UniqueEntity("email")
*/
abstract class Parents implements ParentsInterface
{
	/**
	* The id of the parent
    */
    protected $id;

   /** 
    *  Parent's name
    *
    *  @Assert\NotBlank
    */
    protected $name;

    /** 
    *  Parent's first surname
    *
    *  @Assert\NotBlank
    */
    protected $surname;

    /** 
     *	@Assert\Email 
     */
    protected $email;

    protected $students;
    
    /** 
	 * The phones of this parent (ParentPhone)	
     */
    //protected $phones;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        //$this->phones = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     * @return Tutor
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
     * Set surname
     *
     * @param string $surname
     * @return Tutor
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    
        return $this;
    }

    /**
     * Get surname1
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Tutor
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }  

    /**
     * Add student
     *
     * @param \Hezten\CoreBundle\Model\StudentParentInterface $students
     * @return Tutor
     */
    public function addStudentParent(\Hezten\CoreBundle\Model\StudentParentInterface $students)
    {
        $students->setParent($this);
        $this->students[] = $students;
    
        return $this;
    }

    /**
     * Remove students
     *
     * @param \Hezten\CoreBundle\Model\StudentParentInterface $students
     */
    public function removeStudentParent(\Hezten\CoreBundle\Model\StudentParentInterface $students)
    {
        $this->students->removeElement($students);
    }

    /**
     * Get students
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStudents()
    {
        return $this->students;
    }  
    
    /**
     * Add phones
     *
     * @param \Hezten\CoreBundle\Model\ParentsPhoneInterface $phones
     * @return Tutor
     */
    public function addPhone(\Hezten\CoreBundle\Model\ParentsPhoneInterface $phones)
    {
    	$phones->setParent($this);
        $this->phones[] = $phones;
    
        return $this;
    }

    /**
     * Remove phones
     *
     * @param \Hezten\CoreBundle\Model\ParentsPhoneInterface $phones
     */
    public function removePhone(\Hezten\CoreBundle\Model\ParentsPhoneInterface $phones)
    {
        $this->phones->removeElement($phones);
    }

    /**
     * Get phones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPhones()
    {
        return $this->phones;
    }

}