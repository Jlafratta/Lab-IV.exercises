<?php 

    namespace Models;

    class User{

        private $userName;
        private $password;
        private $firstName;
        private $lastName;
        private $dni;
        private $email;

        public function __construct()
        {
            
        }
 
        public function getUserName()
        {
                return $this->userName;
        }

        public function setUserName($userName)
        {
                $this->userName = $userName;
        }

        public function getPassword()
        {
                return $this->password;
        }

        public function setPassword($password)
        {
                $this->password = $password;
        }

        public function getFirstName()
        {
                return $this->firstName;
        }

        public function setFirstName($firstName)
        {
                $this->firstName = $firstName;
        }

        public function getLastName()
        {
                return $this->lastName;
        }

        public function setLastName($lastName)
        {
                $this->lastName = $lastName;
        }

        public function getDni()
        {
                return $this->dni;
        }

        public function setDni($dni)
        {
                $this->dni = $dni;
        }

        public function getEmail()
        {
                return $this->email;
        }

        public function setEmail($email)
        {
                $this->email = $email;
        }
    }
?>