<?php 

    namespace Process;

    require_once('..\Config\Autoload.php');
    use Config\Autoload as Autoload;
    Autoload::Start();
    use Models\Item as Item;

if($_POST)
    {
        $newItem = new Item();
        $newItem->setItemName($_POST['name']);
        $newItem->setDescription($_POST['desc']);
        $newItem->setPrice($_POST['price']);
        $newItem->setQuantity($_POST['quantity']);

        session_start();
        $bill = $_SESSION['actualBill'];
        $bill->addItem($newItem);
        var_dump($bill);

        header("location:../bill-content.php");
    }

?>