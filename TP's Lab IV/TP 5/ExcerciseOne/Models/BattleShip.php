<?php

    namespace Models;

    require_once('Ship.php');

    use Models\Ship as Ship;

    class BattleShip extends Ship
    {
        private $armament;

        function __construct($name, $maxKnots, $propelQuantity, $armament)
        {
            parent::__construct($name, $maxKnots, $propelQuantity);
            $this->setArmament($armament);
        }

        function getArmament()
        {
            return $this->armament;
        }

        function setArmament($armament)
        {
            $this->armament = $armament;
        }

        function __toString()
        {
            $base = "Name : " . $this->getName() . "<br>Max Knots : " . $this->getMaxKnots() . "<br>Propel Quantity : " . $this->getPropelQuantity() . "<br>Armament : " . $this->getArmament();

            return $base;
        }
    }
    
?>