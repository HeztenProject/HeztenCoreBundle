<?php

namespace Hezten\CoreBundle\Model;

/**
*   StudentParent model
*
*   @author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/

abstract class StudentParent implements StudentParentInterface
{    
    private $student;	

	private $parent; 
    
    /**
     * Set student
     *
     * @param \Hezten\CoreBundle\Entity\Student $student
     * @return StudentParent
     */
    public function setStudent(\Hezten\CoreBundle\Entity\Student $student)
    {
        $this->student = $student;
    
        return $this;
    }

    /**
     * Get student
     *
     * @return \Hezten\CoreBundle\Entity\Student 
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * Set tutor
     *
     * @param \Hezten\CoreBundle\Entity\Parents $tutor
     * @return StudentParent
     */
    public function setParent(\Hezten\CoreBundle\Entity\Parents $parent)
    {
        $this->parent = $parent;
    
        return $this;
    }

    /**
     * Get tutor
     *
     * @return \Hezten\CoreBundle\Entity\Parents
     */
    public function getParent()
    {
        return $this->parent;
    }
}