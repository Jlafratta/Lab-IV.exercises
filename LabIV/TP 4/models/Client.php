<?php

    namespace Models;

    class Client extends Person
    {
        private $userName;
        private $password;

        function __construct($id, $firstName, $lastName, $dni, $email, $userName, $password)
        {
            parent::__construct($id, $firstName, $lastName, $dni, $email);
            $this->userName = $userName;
            $this->password = $password;
        }

        function getUserName()
        {
            return $this->userName;
        }

        function serUserName($userName)
        {
            $this->userName = $userName;
        }

        function getPassword(){
            return $this->password;
        }

        function setPassword($password)
        {
            $this->password = $password;
        }
    }


?>