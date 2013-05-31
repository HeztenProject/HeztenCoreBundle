<?php

namespace Hezten\CoreBundle\Model;

/**
*   City model
*
*   @author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/
abstract class City implements CityInterface
{
    /**
    *   Postal code of the city
    */
    protected $id;
    
    /**
    *   City name
    */
    protected $name;

    /**
    *  State the city is located in
    */
    protected $state;

    /**
     * Set id
     *
     * @param integer $id
     * @return City
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
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
     * @return City
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
     * Set province
     *
     * @param \Hezten\CoreBundle\Model\StateInterface  $state
     * @return City
     */
    public function setState(\Hezten\CoreBundle\Model\StateInterface  $state = null)
    {
        $this->province = $province;
    
        return $this;
    }

    /**
     * Get province
     *
     * @return \Hezten\CoreBundle\Model\StateInterface 
     */
    public function getState()
    {
        return $this->state;
    }
    
}