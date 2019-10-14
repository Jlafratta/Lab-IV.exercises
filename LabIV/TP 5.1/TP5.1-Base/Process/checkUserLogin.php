<?php 

    namespace Process;

    use Config\Autoload as Autoload;
    Autoload::Start();
    use Models\User as User;

    $loggeduser = null;

    session_start();

    if(isset($_SESSION['loggeduser']))
    {
        $loggeduser = $_SESSION['loggeduser'];
    }else{
        echo "<script> if(confirm('Necesitas estar logueado'));";
        echo "window.location = 'index.php';</script>";
    }
?>