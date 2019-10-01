<?php

    namespace Process;

    if($_POST)
    {
        if($_POST['action'] == 'continue')
        {
            header("location:../add.php");
        }else{
            session_start();
            session_destroy();
            echo "<script> if(confirm('Te has deslogueado'))";
            echo "window.location = '../index.php'; </script>";
        }
    }
?>