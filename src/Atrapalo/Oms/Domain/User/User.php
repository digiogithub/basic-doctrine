<?php

namespace Atrapalo\Oms\Domain\User;

class User
{
    /**
     * @var UserId
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param UserId $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return UserId
     */
    public function getId()
    {
        return $this->id;
    }
}