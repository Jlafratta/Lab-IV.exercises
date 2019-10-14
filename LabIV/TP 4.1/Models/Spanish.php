<?php

    namespace Models;
    require_once('Greet.php');
    use Models\Greet as Greet;

    class Spanish extends Greet
    {
        function sayHi()
        {
            $this->setMsg("Hola!, como estas?");

            include_once("greeting.php");
        }

        function sayGoodBye()
        {
            $this->setMsg("Hasta luego, que tengas un buen dia");

            include_once('greeting.php');
        }
    }

?> 