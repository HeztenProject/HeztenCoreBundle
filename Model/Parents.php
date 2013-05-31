<?php

namespace Hezten\CoreBundle\Model;

/**
* 	Parent model
*
*	@author Gorka Lauzirika <gorka.lauzirika@gmail.com>
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
    
    /** 
	 * The phones of this parent (ParentPhone)	
     */
    protected $phones;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->phones = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add phones
     *
     * @param \Hezten\CoreBundle\Entity\TutorPhone $phones
     * @return Tutor
     */
    public function addPhone(\Hezten\CoreBundle\Entity\TutorPhone $phones)
    {
    	$phones->setTutor($this);
        $this->phones[] = $phones;
    
        return $this;
    }

    /**
     * Remove phones
     *
     * @param \Hezten\CoreBundle\Entity\TutorPhone $phones
     */
    public function removePhone(\Hezten\CoreBundle\Entity\TutorPhone $phones)
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