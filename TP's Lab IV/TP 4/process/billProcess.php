<?php

   namespace process;

     if($_GET)
     {
         $date = time();
         $actualDate = date("Y-m-d", $date);

         if($_GET["dateFactura"] <= $actualDate)
         {
            header("location:../bill-content.php");

         }else{
            echo "<script> if(confirm('La fecha ingresada no es valida'))";
            echo "window.location: '../add-bill.php' </script>";
         }
     }else{
        echo "<script> if(confirm('Error en el pasaje de datos GET'))";
        echo "window.location: '../index.php' </script>";
     }

?>