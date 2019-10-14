<?php
                        // COMPROBACION DE LOGUEO
    namespace process;

    if($_POST)
    {
        $user = $_POST["userName"]; // Bajo user y pass del $_POST a variables 
        $pass = $_POST["pass"];

        if($user == "Cosme Fulanito")   // Verifico user solicitado
        {
            if($pass == "strongPassword")   // Verifica pass solicitada
            {
                header("location:../add-bill.php");     // si es correcta ingresa a add-bill.php

            }else{
                                                                                            // Si es incorrecta
                echo "<script> if(confirm('Verifique que la contraseña sea correcta'))";   // Aviso con alerta
			    echo "window.location = '../index.php' </script>";                          // Y vuelvo al index al aceptar
			    
            }
        }else{

            echo "<script> if(confirm('Verifique que el usuario sea correcto'))";  // Mismo tramite que con
			echo "window.location = '../index.php' </script>";                      // la contraseña
        }
    }else{

        echo "<script> if(confirm('Error al pasar los datos'))";   // Mismo sistema si falla el pasaje
        echo "window.location = '../index.php' </script>";          // de datos (POST)
    }
?>