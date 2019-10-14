<?php 

    namespace Process;

    require_once('..\Config\Autoload.php');
    use Config\Autoload as Autoload;
    Autoload::Start();

    use Models\Bill as Bill;
    use Repository\billRepository as billRepository;

    if($_POST)
    {
        $bill = new Bill();                     //FALTARIA VALIDAR QUE NO EXISTA TIPO Y NUMERO
        
        session_start();
        $bill = $_SESSION['actualBill'];
        $billRepo = new billRepository();
        $billRepo->add($bill);
        echo "SAPE";

        echo "<script> if(confirm('Factura procesada correctamente'));";
        echo "window.location ='../bill-list.php';</script>";
    }
?>