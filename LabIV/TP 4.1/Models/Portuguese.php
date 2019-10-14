<?php

    namespace Models;
    require_once('Greet.php');
    use Models\Greet as Greet;

    class Portuguese extends Greet
    {
        function sayHi()
        {
            $this->setMsg("Oi, como vai?");

            include_once("greeting.php");
        }

        function sayGoodBye()
        {
            $this->setMsg("Adeus, tenha um bom dia");

            include_once("greeting.php");
        }
    }

?>