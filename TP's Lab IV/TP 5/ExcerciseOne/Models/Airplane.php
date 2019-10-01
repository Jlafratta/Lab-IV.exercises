<?php

    namespace Models;

    require_once('Aerial.php');

    use Models\Aerial as Aerial;

    class Airplane extends Aerial
    {
        private $capacity;

        function __construct($name, $engineQuantity, $capacity)
        {
            parent::__construct($name, $engineQuantity);
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
            return "Name : " . $this->getName() . "<br>Engine Quantity : " . $this->getEngineQuantity() . "<br>Capacity : " . $this->getCapacity();
        }
    }

?>