<?php

    namespace Models;

    require_once('Ship.php');

    use Models\Ship as Ship;

    class Cruiser extends Ship
    {
        private $capacity;

        function __construct($name, $maxKnots, $propelQuantity, $capacity)
        {
            parent::__construct($name, $maxKnots, $propelQuantity);
            $this->setCapacity($capacity);
        }

        function getCapacity()
        {
            return $this->capacity;
        }

        function setCapacity($capacity)
        {
            $this->capacity = $capacity;
        }

        function __toString()
        {
            $base = "Name : ". $this->getName() . "<br> Max Knots : " . $this->getMaxKnots() . "<br> Propel Quantity : " . $this->getPropelQuantity() . "<br> Capacity : " . $this->getCapacity();

            return $base;
        }
    }
?>