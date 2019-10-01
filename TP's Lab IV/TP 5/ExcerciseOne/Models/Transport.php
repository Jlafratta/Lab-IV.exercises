<?php

    namespace Models;

    abstract class Transport
    {
        private $name;

        function __construct($name)
        {
            $this->setName($name);
        }

        function getName()
        {
            return $this->name;
        }

        function setName($name)
        {
            $this->name = $name;
        }

    }

?>