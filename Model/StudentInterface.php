<?php

namespace Hezten\CoreBundle\Model;

/**
* 	Student model interface
*
*	@author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/

interface StudentInterface
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
     * Get surname
     *
     * @return string 
     */
    public function getSurname();

    /**
     * Get birthDate
     *
     * @return \DateTime 
     */
    public function getBirthDate();

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender();

    /**
     * Get city
     *
     * @return \Hezten\CoreBundle\Model\CityInterface
     */
    public function getCity();

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage();
}