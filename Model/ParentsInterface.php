<?php

namespace Hezten\CoreBundle\Model;

/**
*   Parents model interface
*
*   @author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/

interface ParentsInterface
{
    /**
     * Get name
     *
     * @return string 
     */
    public function getName();

    /**
     * Get surname1
     *
     * @return string 
     */
    public function getSurname();

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail();

    /**
     * Get students
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStudents();

    /**
     * Get phones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    //public function getPhones();
    
    /**
    * Get a string representation of the object
    * @return string
    */
    public function __toString();
}
