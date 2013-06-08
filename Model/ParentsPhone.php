<?php

namespace Hezten\CoreBundle\Model;

use Symfony\Component\Validator\Constraints as Assert;

/**
* 	ParentsPhone model
*
*	@author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/

abstract class ParentsPhone implements ParentsPhoneInterface
{
	protected $id;

	protected $number;

	protected $parent;
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
     * Set number
     *
     * @param string $number
     * @return TutorPhone
     */
    public function setNumber($number)
    {
        $this->number = $number;
    
        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

     /**
     * Set parent
     *
     * @param \Hezten\CoreBundle\Model\ParentsInterface $parent
     * @return ParentsPhone
     */
    public function setParent(\Hezten\CoreBundle\Model\ParentsInterface $parent = null)
    {
        $this->parent = $parent;
    
        return $this;
    }

    /**
     * Get tutor
     *
     * @return \Hezten\CoreBundle\Model\ParentsInterface
     */
    public function getParent()
    {
        return $this->parent;
    }
}