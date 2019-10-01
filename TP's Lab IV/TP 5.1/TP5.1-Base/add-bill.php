<?php
include('header.php');
include('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h3 class="mb-3">Datos del Usuario</h3>

               <div class="bg-light-alpha p-2">
                    <div class="row">
                         <div class="col-lg-4">
                              <label for="firstname">Nombre</label>
                              <input type="text" name="firstname" class="form-control form-control-ml" disabled value="<?php echo $loggeduser->getFirstName() ?>">
                         </div>

                         <div class="col-lg-3">
                              <label for="lastname">Apellido</label>
                              <input type="text" name="lastname" class="form-control form-control-ml" disabled value="<?php echo $loggeduser->getLastName() ?>">
                         </div>

                         <div class="col-lg-2">
                              <label for="dni">DNI</label>
                              <input type="number" name="dni" class="form-control form-control-ml" disabled value="<?php echo $loggeduser->getDni() ?>">
                         </div>

                         <div class="col-lg-3">
                              <label for="email">Email</label>
                              <input type="text" name="email" class="form-control form-control-ml" disabled value="<?php echo $loggeduser->getEmail() ?>">
                         </div>
                    </div>
          </div><br>
          <div class="container">
               <h2 class="mb-4">Agregar Factura</h2>

               <form action="Process/addbillProcess.php" method="POST" class="bg-light-alpha p-5">
                    <div class="row">
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="date">Fecha</label>
                                   <input type="date" name="date" value="" class="form-control" max="" required>
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <p>Tipo</p>
                                   <input type="radio" name="type" value="a" class="radioSize" required>Factura A
                                   <input type="radio" name="type" value="b" class="radioSize">Factura B
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="number">Numero</label>
                                   <input type="number" name="number" value="" class="form-control" min="0" required>
                              </div>
                         </div>
                    </div>
                    <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>

<?php include('footer.php') ?>
