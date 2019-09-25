<?php 

    namespace Repository;

    include_once("../Config/Autoload.php");

    use Models\User as User;

    interface IUser
    {
        function add(User $user);
        function getAll();
        function getByName($userName);
    }
?>