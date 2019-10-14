<?php require 'header.php'; ?>


<?php                  // Pasaje del string con los datos, al array de items

     require_once "models/Item.php";
     use models\Item as Item;

     $stringItems = "pincel fino de 2/3, pincel de cerdas finas para acuarela, 120.00, 6,
     pintura fluor 1L, pintura warner fluo, 400.00, 3,
     plato de mezcla, plato plástico de mezcla con refuerzo anti caída, 200.00, 1,
     pincel común 1.2, pincel fabber cerda común para tempera, 120.00, 5,
     rodillo grueso 3/4, rodillo rugoso de expesor para exterior, 95.00, 2, 
     kit de acuarelas, combo de acuarelas color pastel, 770.00, 2";

     $arrayExploded = explode(",", $stringItems);

     $arrayItems = array();

     while(!empty($arrayExploded))
     {
          $item = new Item(array_shift($arrayExploded), array_shift($arrayExploded), array_shift($arrayExploded), array_shift($arrayExploded));
          array_push($arrayItems, $item);
     }
?>






<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Detalles de Factura</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Nombre</th>
                         <th>Descripcion</th>
                         <th>Precio</th>
                         <th>Cantidad</th>
                         <th>Sub-total</th>
                    </thead>
                    <tbody>
                         
                         <?php 
                         
                         $total = 0;    // Variable para acumular los precios 
                         
                         foreach($arrayItems as $key => $value){ ?>

                         <tr>
                              <td> <?php echo $value->getName(); ?> </td>
                              <td> <?php echo $value->getDescription(); ?></td>
                              <td> <?php echo $value->getPrice(); ?> </td>
                              <td> <?php echo $value->getQuantity() ?></td>

                              <?php $subtotal = $value->getPrice()*$value->getQuantity(); ?>

                              <td> <?php echo $subtotal ?> </td>

                              <?php $total = $total + $subtotal; ?>
                         
                         </tr>

                         <?php } ?>
                    
                    </tbody>
               </table>
          </div>
     </section>

     <section id="eliminar">
          <div class="container">
               
               <form action="" method="" class="form-inline bg-light-alpha p-3">
                    <div class="form-group text-white">
                         <label for="">TOTAL</label>
                         <input type="text" value="<?php echo $total; ?>" class="form-control ml-3" disabled>
                    </div>
                    <button type="submit" name="button" class="btn btn-danger ml-3">Calcular Total</button>
               </form>
          </div>
     </section>

</main>

<?php require 'footer.php'; ?>