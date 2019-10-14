<?php 

    namespace Models;
    require_once('Greet.php');
    use Models\Greet as Greet;

    class English extends Greet
    {
        function sayHi()
        {
            $this->setMsg("Hi, how are you?");

            include_once("greeting.php");
        }

        function sayGoodBye()
        {
            $this->setMsg("Bye, have a nice day");

            include_once("greeting.php");
        }
    }

?>