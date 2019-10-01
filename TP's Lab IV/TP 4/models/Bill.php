<?php

    namespace Models;

    class Bill
    {
        private $date;
        private $type;
        private $number;

        function __construct($date, $type, $number)
        {
            $this->date = $date;
            $this->type = $type;
            $this->number = $number;
        }

        function getDate()
        {
            return $this->date;
        }

        function setDate($date)
        {
            $this->date = $date;
        }
        
        function getType()
        {
            return $this->type;
        }

        function setType($type)
        {
            $this->type = $type;
        }

        function getNumber()
        {
            return $this->number;
        }

        function setNumber($number)
        {
            $this->number = $number;
        }
    }
