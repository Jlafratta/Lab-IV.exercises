<?php

    namespace Models;

    require_once('Transport.php');

    use Models\Transport as Transport;

    class Maritime extends Transport
    {
        private $maxKnots;

        function __construct($name, $maxKnots)
        {
            parent::__construct($name);
            $this->setMaxKnots($maxKnots);
        }

        function getMaxKnots()
        {
            return $this->maxKnots;
        }

        function setMaxKnots($maxKnots)
        {
            $this->maxKnots = $maxKnots;
        }
    }
?>