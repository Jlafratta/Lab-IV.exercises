<?php

    namespace Models;

    require_once('Maritime.php');

    use Models\Maritime as Maritime;

    class Ship extends Maritime
    {
        private $propelQuantity;

        function __construct($name, $maxKnots, $propelQuantity)
        {
            parent::__construct($name, $maxKnots);
            $this->setPropelQuantity($propelQuantity);
        }

        function getPropelQuantity()
        {
            return $this->propelQuantity;
        }

        function setPropelQuantity($propelQuantity)
        {
            $this->propelQuantity = $propelQuantity;
        }
    }
?>