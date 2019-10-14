<?php 

    namespace Models;

    require_once('Transport.php');

    use Models\Transport as Transport;

    class Aerial extends Transport
    {

        private $engineQuantity;

        function __construct($name, $engineQuantity)
        {
            parent::__construct($name);
            $this->setEngineQuantity($engineQuantity);
        }

        function getEngineQuantity()
        {
            return $this->engineQuantity;
        }

        function setEngineQuantity($engineQuantity)
        {
            $this->engineQuantity = $engineQuantity;
        }


    }
?>