<?php

/**
 * Created by PhpStorm.
 * User: Hafidh Fikri Rasyid
 * Date: 11/8/2016
 * Time: 4:15 PM
 */
class User
{
    private $username,$password;

    public function __construct($username,$password){
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }
}