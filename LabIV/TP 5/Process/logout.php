<?php 

    namespace Process;

    session_start();
    session_destroy();
    //header("location:../index.php");

    echo "<script> if(confirm('Te has deslogueado'))";
    echo "window.location = '../index.php'; </script>";

    ?>