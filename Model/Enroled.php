<?php

namespace Hezten\CoreBundle\Model;

/**
* 	Enroled model
*
*	@author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/

abstract class Enroled implements EnroledInterface
{
	protected $student;
	
	protected $subject;
	
    /**
     * Set subject
     *
     * @param \Hezten\CoreBundle\Model\SubjectInterface $subject
     * @return Enroled
     */
    public function setSubject(\Hezten\CoreBundle\Model\SubjectInterface $subject)
    {
        $this->subject = $subject;
    
        return $this;
    }

    /**
     * Get subject
     *
     * @return \Hezten\CoreBundle\Model\SubjectInterface 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set student
     *
     * @param \Hezten\CoreBundle\Model\StudentInterface $student
     * @return Enroled
     */
    public function setStudent(\Hezten\CoreBundle\Model\StudentInterface $student)
    {
        $this->student = $student;
    
        return $this;
    }

    /**
     * Get student
     *
     * @return \Hezten\CoreBundle\Model\StudentInterface 
     */
    public function getStudent()
    {
        return $this->student;
    }
}
