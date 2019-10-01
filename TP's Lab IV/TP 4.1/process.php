<?php

// require_once("Models/English.php");
// require_once("Models/Spanish.php");
// require_once("Models/Portuguese.php");

require_once("Config/Autoload.php");

use Models\Spanish as Spanish;
use Models\English as English;
use Models\Portuguese as Portuguese;

    if($_POST)
    {
        if( isset($_POST["language"]) && isset($_POST["message"]) )
        {
            $lang = $_POST["language"];
            $typeMsg = $_POST["message"];
            $msg = null;

            if($lang == "spanish")
            {
                $msg = new Spanish();

            }else if($lang == "english")
            {
                $msg = new English();

            }else{

                $msg = new Portuguese();
            }

            if($typeMsg == "other")
            {
                $text = isset($_POST['msgText']) && $_POST['msgText'] != "" ? $_POST['msgText'] : "Olvidaste escribir un mensaje";

                call_user_func(array($msg, $typeMsg), $text);

            }else{

                call_user_func(array($msg, $typeMsg));
            }


        }else{
            echo "<script> if(confirm('Debe seleccionar idioma y/o tipo de mensaje'));";
            echo "window.location = 'index.php'; </script>";
        }
       
    }else{
        echo "<script> if(confirm('Error al pasar los datos'))";   // Mismo sistema si falla el pasaje
        echo "window.location = '../index.php' </script>";
    }


?>