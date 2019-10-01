<?php

include('header.php');
include('nav.php');

include_once("Repositories/beerRepository.php");
include_once("Models/Beer.php");

use Repositories\beerRepository as beerRepository;
use Models\Beer as Beer;

$beerRepo = new beerRepository;
$beerList = array();
$beerList = $beerRepo->getAll();

?>

<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Titulo</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Codigo</th>
                         <th>Nombre</th>
                         <th>Descripcion</th>
                         <th>Tipo</th>
                    </thead>
                    <tbody>

                         <?php foreach($beerList as $key => $beer){ ?>

                         <tr>
                              <td><?php echo $beer->getCode(); ?></td>
                              <td><?php echo $beer->getName(); ?></td>
                              <td><?php echo $beer->getDescription(); ?></td>
                              <td><?php echo $beer->getType(); ?></td>
                              
                         </tr>

                         <?php }?>

                    </tbody>
               </table>
          </div>
     </section>

     <section id="eliminar">
          <div class="container">
               
               <form action="" method="" class="form-inline bg-light-alpha p-3">

               </form>
          </div>
     </section>

</main>

<?php include('footer.php') ?>
