<?php

namespace Hezten\CoreBundle\Model;

/**
* 	Enroled model interface
*
*	@author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/

interface StudentParentInterface
{
    /**
     * Get student
     *
     * @return \Hezten\CoreBundle\Model\StudentInterface 
     */
    public function getStudent();

    /**
     * Get parent
     *
     * @return \Hezten\CoreBundle\Model\ParentsInterface 
     */
    public function getParent();
}