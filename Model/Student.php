<?php

namespace Hezten\CoreBundle\Model;

/**
* 	Student model
*
*	@author Gorka Lauzirika <gorka.lauzirika@gmail.com>
*/

abstract class Student implements StudentInterface
{
	/**
	* The id of the student
	*/
	protected $id;

	/**
	* Student's name
	*/
	protected $name;

	/**
	* Student`s surname
	*/
	protected $surname;

	/**
	* Student's birthdate
	*/
	protected $birthDate;

	/**
	* Student's gender (M: Male, F: Female)
	*/
	protected $gender;

	/**
	*  Student's city
	*/
	protected $city;

	/**
	*  Student's image URL
	*/
	protected $image;

	/**
	* Image file is stored here during the upload
	*/
	protected $imageFile;
	/**
	*  Subjects where the student is enroled in
	*/
	protected $enroled;

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
     * @return Student
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
     * @return Student
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    
        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

     /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     * @return Student
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    
        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime 
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return Student
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    
        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

     /**
     * Set city
     *
     * @param \Hezten\CoreBundle\Model\CityInterface $city
     * @return Student
     */
    public function setCity(\Hezten\CoreBundle\Model\CityInterface $city = null)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return \Hezten\CoreBundle\Model\CityInterface 
     */
    public function getCity()
    {
        return $this->city;
    }

     /**
     * Set image
     *
     * @param string $image
     * @return Student
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
    	if( $this->image === null )
    		return 'noimage.jpg';
        return $this->image;
    }

    /**
     * Set image file
     *
     * @param string $imageFile
     * @return Student
     */
    public function setImageFile($imageFile)
    {
        $this->imageFile = $imageFile;
    }

    /**
     * Get image file
     *
     * @return string 
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function uploadImage($targetDir)
	{
		if (null === $this->imageFile) {
			return;
		}
	
		$fileName = uniqid('student-').'-1.'.$this->imageFile->guessExtension();
	
		$this->imageFile->move($targetDir, $fileName);
	
		$this->setImage($fileName);
	}

    /**
     * Add enroled
     *
     * @param \Hezten\CoreBundle\Model\EnroledInterface  $enroled
     * @return Student
     */
    public function addEnroled(\Hezten\CoreBundle\Model\EnroledInterface $enroled)
    {
        $this->enroled[] = $enroled;
    
        return $this;
    }

    /**
     * Remove enroled
     *
     * @param \Hezten\CoreBundle\Model\EnroledInterface  $enroled
     */
    public function removeEnroled(\Hezten\CoreBundle\Model\EnroledInterface $enroled)
    {
        $this->enroled->removeElement($enroled);
    }

    /**
     * Get enroled
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEnroled()
    {
        return $this->enroled;
    }
}