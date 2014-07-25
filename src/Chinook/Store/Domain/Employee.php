<?php

namespace Chinook\Store\Domain;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Employee
{
    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $title;

    /**
     * @var Employee
     */
    private $superior;

    /**
     * @var DateTime
     */
    private $birthdate;

    /**
     * @var DateTime
     */
    private $hiredate;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $employeeId;

    /**
     * @var Collection
     */
    private $servedCustomers;

    public function __construct()
    {
        $this->servedCustomers = new ArrayCollection();
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Employee
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Employee
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Employee
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set reportsTo
     *
     * @param Employee $anEmployee
     * @return Employee
     */
    public function reportsTo($anEmployee)
    {
        $this->superior = $anEmployee;

        return $this;
    }

    /**
     * Get inmediate superior
     *
     * @return Employee
     */
    public function getSuperior()
    {
        return $this->superior;
    }

    /**
     * Set birthdate
     *
     * @param DateTime $birthdate
     * @return Employee
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set hiredate
     *
     * @param DateTime $hiredate
     * @return Employee
     */
    public function setHiredate($hiredate)
    {
        $this->hiredate = $hiredate;

        return $this;
    }

    /**
     * Get hiredate
     *
     * @return DateTime
     */
    public function getHiredate()
    {
        return $this->hiredate;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Employee
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Employee
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Employee
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Employee
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     * @return Employee
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string 
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Employee
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Employee
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Employee
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get employeeId
     *
     * @return integer 
     */
    public function getEmployeeId()
    {
        return $this->employeeId;
    }
}
