<?php

class Creator extends User {

    const GENDER_MALE = "m";
    const GENDER_FEMALE = "f";

    /**
     * @var DateTime date of birth
     */
    private $dateOfBirth;

    private $gender;
    private $country;
    private $state;
    private $city;
    private $postalCode;

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param mixed $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return DateTime
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param DateTime $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return SplEnum
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     * @throws InvalidArgumentException
     */
    public function setGender($gender)
    {
        if(in_array($gender, array(Creator::GENDER_MALE, Creator::GENDER_FEMALE))) {
            $this->gender = $gender;
        } else {
            throw new InvalidArgumentException("Invalid argument for gender: It can be either " . Creator::GENDER_FEMALE . " or " . Creator::GENDER_MALE);
        }
    }
}