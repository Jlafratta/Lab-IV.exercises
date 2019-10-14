<?php 

    // SESSION EXCERCISE

    namespace Models; 

    class User
    {
        private $userName;
        private $password;
        private $firstName;
        private $lastName;
        private $email;

        public function __construct($userName, $password, $firstName, $lastName, $email)
        {
            $this->setUsername($userName);
            $this->setPassword($password);
            $this->setFirstName($firstName);
            $this->setLastName($lastName);
            $this->setEmail($email);
        }

        public function getUsername()
        {
            return $this->userName;
        }

        public function getPassword()
        {
            return $this->password;
        }

        public function getFirstName()
        {
            return $this->firstName;
        }

        public function getLastName()
        {
            return $this->lastName;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setUsername($username)
        {
            $this->userName = $username;
        }

        public function setPassword($pass)
        {
            $this->password = $pass;
        }

        public function setFirstName($firstName)
        {
            $this->firstName = $firstName;
        }

        public function setLastName($lastName)
        {
            $this->lastName = $lastName;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }
    }
        
?>