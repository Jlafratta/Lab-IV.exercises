<?php 

    namespace Repositories;

    require_once("../Models/Beer.php");

    use Models\Beer as Beer;

    interface IBeer
    {
        function add(Beer $name);
        function delete($name);
        function getAll();
    }
?>