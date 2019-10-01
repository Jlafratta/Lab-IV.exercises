<?php

    namespace Models;

    abstract class Greet
    {
        private $msg;

        function __construct()
        {
            
        }

        function getMsg()
        {
            return $this->msg;
        }

        function setMsg($msg)
        {
            $this->msg = $msg;
        }

        function other($msg)
        {
            $this->setMsg($msg);

            include_once("greeting.php");
        }

        abstract function sayHi();
        abstract function sayGoodBye();
    }

?>