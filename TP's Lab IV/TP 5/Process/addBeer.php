<?php 

    require_once("../Config/Autoload.php");

    
    use Repositories\beerRepository as beerRepository;
    use Models\Beer as Beer;
    use Repositories\IBeer as IBeer;
    
    session_start();

    if(isset($_SESSION['loggedUser']))
    {
        
        if($_POST)
        {
            if(isset($_POST['code']) && isset($_POST['name']) && isset($_POST['type']))
            {
                $newBeer = new Beer();
                $newBeer->setCode($_POST['code']);
                $newBeer->setName($_POST['name']);
                $newBeer->setDescription($_POST['description']);
                $newBeer->setType($_POST['type']);

                $repoBeer = new beerRepository();
                $repoBeer->add($newBeer);

                echo "<script> if(confirm('Cerveza agregada con exito!'));";
                echo "window.location = '../list.php'; </script>";
            }
        }

    }else{
        echo "<script> if(confirm('Debes estar logueado para realizar esta accion'));";
        echo "window.location = ../index.php ; </script>";
    }


?>