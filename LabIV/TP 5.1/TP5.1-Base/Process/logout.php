<?php 

    namespace Process;

    session_start();
    session_destroy();
    echo "<script> if(confirm('Te has deslogueado correctamente'))";
    echo "window.location='../index.php';</script>";
?>