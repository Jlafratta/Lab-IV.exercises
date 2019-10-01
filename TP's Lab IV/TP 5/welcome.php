<?php include('header.php'); ?>

<?php

require_once("Models/User.php");

use Models\User as User;

session_start();

if(isset($_SESSION['loggedUser']))
{
    $user = $_SESSION['loggedUser'];
?>

<div class="container mt-5">
	<h2 style="text-align: center;">WELCOME!!!!!!</h2>
	<table class="table table-dark">
		<thead>
			<tr>
				<th scope="col">User Name</th>
				<th scope="col">Password</th>
				<th scope="col">First Name</th>
				<th scope="col">Last Name</th>
				<th scope="col">Email</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th> <?php echo $user->getUsername() ?> </th>
				<td> <?php echo $user->getPassword() ?> </td>
				<td> <?php echo $user->getFirstName() ?> </td>
				<td> <?php echo $user->getLastName() ?> </td>
				<td> <?php echo $user->getEmail() ?> </td>
			</tr>
			
		</tbody>
	</table>
	<div class="container">
		<form action="Process/change.php" method="POST">
		<div class="row">
		<div class="col-md-10">
			<button name="action" value="continue" class="btn btn-success">Continuar</button>
		</div>
		<div class="col-md-2">
			<button name="action" value="exit" class="btn btn-danger">Salir</button>
		</div>
		
	</div>
	</form>
	</div>
	

	
	
</div>

<?php 

}else{
    echo "<script> if(confirm('No te encuentras logueado. Vuelve a loguearte para continuar'));";
    echo "window.location = 'index.php'; </script>";
}

?>

<?php include('footer.php');?>