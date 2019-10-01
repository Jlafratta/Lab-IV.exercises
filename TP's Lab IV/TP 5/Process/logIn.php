<?php

// SESSION EXCERCISE

    namespace Process;

    //require_once("../Models/User.php");
    require_once('../Config/Autoload.php');

    use Models\User as User;

    $users = array();

    $user1 = new User("SSoler", "cosme1234", "Sebastian", "Soler", "sebastian@utn.com");
    $user2 = new User("AzarJ", "alAzar123", "Juan", "Azar", "juan_azar@utn.com");
    $user3 = new User("Mari123", "123456Mari", "Maria", "Perez", "mariap@utn.com");

    array_push($users, $user1);
    array_push($users, $user2);
    array_push($users, $user3);

    $loggedUser = null;

    if($_POST)
    {
        $userName = $_POST['userName'];
        $password = $_POST['password'];

        foreach($users as $key => $actualUser)
        {
            if($actualUser->getUsername() == $userName && $actualUser->getPassword() == $password)
            {
                $loggedUser = $actualUser;
            }
        }

        if($loggedUser != null)
        {
            session_start();
            $_SESSION['loggedUser'] = $loggedUser;
            header("location:../welcome.php");

        }else{

                echo "<script> if(confirm('Usuario o contraseña incorrectos'));";
                echo "window.location = '../index.php'; </script>";
            }

    }else{
        echo "<script> if(confirm('Error en el pasaje de datos'));";
        echo "window.location = '../index.php'; </script>";
    }
?>