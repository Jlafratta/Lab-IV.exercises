<?php 
     require_once('Config\Autoload.php');
     include("Process/checkUserLogin.php");
?>

<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
     <span class="navbar-text">
          Hola <strong> <?php echo $loggeduser->getUserName() ?> </strong> - TP N° 5
     </span>
     <ul class="navbar-nav ml-auto">
          <li class="nav-item">
               <a class="nav-link" href="bill-list.php">Listar Facturas</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="add-bill.php">Agregar Nueva Factura</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="Process/logout.php">Cerrar sesión</a>
          </li>
     </ul>
</nav>
