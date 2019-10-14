<?php 

namespace Process;

require_once('..\Config\Autoload.php');


use Config\Autoload as Autoload;

use Model\User as User;
use Repository\userRepository as userRepository;

Autoload::Start();

    // $userRepository = new userRepository();
    
    // $user = new User();
    // $user->setUserName("JLafratta");
    // $user->setPassword("pelucasape");
    // $user->setFirstName("Julian");
    // $user->setLastName("Lafratta");
    // $user->setDni("41307551");
    // $user->setEmail("julian.lafratta@gmail.com");

    // $userRepository->add($user);

$repoUser = new userRepository();
$loggedUser = $repoUser->getByName($_POST['username']);

if($_POST)
{
    if($loggedUser!=null && $loggedUser->getUserName() == $_POST['username'] && $loggedUser->getPassword() == $_POST['password'])
    {
        session_start();

        $loggedUser = $repoUser->getByName($_POST['username']);
        $_SESSION['loggeduser'] = $loggedUser;
        header("location:../add-bill.php");
        
    }else{
        echo "<script> if(confirm('Usuario o contraseña incorrectos'));";
        echo "window.location='../index.php';</script>";
    }
}else{
    echo "<script> if(confirm('Error en el pasaje de datos'));";
    echo "window.location = 'index.php';</script>";
}




?>