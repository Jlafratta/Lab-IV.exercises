<?php
include('header.php');
include('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Agregar una cerveza</h2>

               <form class="bg-light-alpha p-5" action="Process/addBeer.php" method="POST">
                    <div class="row">
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="code">Codigo</label>
                                   <input type="Text" name="code" value="" class="form-control" required>
                                   <label for="name">Nombre</label>
                                   <input type="Text" name="name" value="" class="form-control" required>
                                   <label for="description">Descripcion</label>
                                   <input type="textarea" name="description" value="" class="form-control">
                                   <label for="">Tipo de cerveza</label>
                                   <br>
                                   <input type="radio" name="type" value="rubia">Rubia
                                   <input type="radio" name="type" value="roja" required>Roja
                                   <input type="radio" name="type" value="negra">Negra
                                   
                              </div>
                         </div>
                         
                    </div>
                    <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>

<?php include('footer.php') ?>
