<?php 

require_once("Models/User.php");

session_start();

use Models\User as User;

if(isset($_SESSION['loggedUser']))
{
     $loggedUser = $_SESSION['loggedUser'];
}else{
     echo "<script> if(confirm('Debes estar logueado para realizar esta accion'));";
     echo "window.location = ../index.php ; </script>";
}


?>

<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
     <span class="navbar-text">
          <strong>Actual user: </strong> <?php echo $loggedUser->getUsername(); ?>
     </span>
     <ul class="navbar-nav ml-auto">
          <li class="nav-item">
               <a class="nav-link" href="list.php">Listar</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="add.php">Agregar</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="Process/logout.php">Logout</a>
          </li>
     </ul>
</nav>
