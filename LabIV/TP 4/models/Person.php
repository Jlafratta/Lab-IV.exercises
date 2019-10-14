<?php

    namespace Models;

    abstract class Person
    {
        private $id;
        private $firstName;
        private $lastName;
        private $dni;
        private $email;

        function __construct($id, $firstName, $lastName, $dni, $email)
        {
            $this->id = $id;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->dni = $dni;
            $this->email = $email;
        }

        function getId()
        {
            return $this->id;
        }

        function setId($id)
        {
            $this->id = $id;
        }

        function getfirstName()
        {
            return $this->firstName;
        }

        function setFirstName($firstName)
        {
            $this->firstName = $firstName;
        }

        function getLastName()
        {
            return $this->lastName;
        }

        function setLastName($lastName)
        {
            $this->lastName = $lastName;
        }

        function getDni()
        {
            return $this->dni;
        }

        function setDni($dni)
        {
            $this->dni = $dni;
        }

        function getEmail()
        {
            return $this->email;
        }

        function setEmail($email)
        {
            $this->email = $email;
        }
    }

?>