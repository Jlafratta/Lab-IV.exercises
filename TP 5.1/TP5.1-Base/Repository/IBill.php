<?php 

    namespace Repository;

    require_once('../Config/Autoload.php');
    use Config\Autoload as Autoload;
    Autoload::Start();

    interface IBill
    {
        function add(Bill $bill);
        function remove($billNumber);
        function getAll();
    }
?>