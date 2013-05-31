<?php

namespace Hezten\CoreBundle\Model;

/**
* 	Enroled model interface
*
*	@author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/

interface EnroledInterface
{
	/**
     * Get subject
     *
     * @return \Hezten\CoreBundle\Model\SubjectInterface
     */
    public function getSubject();

    /**
     * Get student
     *
     * @return \Hezten\CoreBundle\Model\StudentInterface 
     */
    public function getStudent();
}