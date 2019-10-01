<?php

    require_once('Config/Autoload.php');

    use Models\Cruiser as Cruiser;
    use Models\BattleShip as BattleShip;
    use Models\Airplane as Airplane;

    $transportArray = array();

    $cruiser = new Cruiser("Crucero", "4", "2", "50");

    $battleShip = new BattleShip("Nave de batalla", "15", "4", "Cañones");

    $airplane = new Airplane("Avioncito", "1", "5");

    array_push($transportArray, $cruiser);
    array_push($transportArray, $battleShip);
    array_push($transportArray, $airplane);

    foreach($transportArray as $transport)
    {
        echo "<br><=============================><br>";
        echo $transport;
    }
    echo "<br><=============================><br>";
?>