<?php

    namespace Process;

    require_once('..\Config\Autoload.php');
    use Config\Autoload as Autoload;
    Autoload::Start();

    use Models\Bill as Bill;
    use Repository\billRepository as billRepository;

    if($_POST)
    {
    
        if(isset($_POST['date']) && isset($_POST['type']) && isset($_POST['number']) )
        {
            $bill = new Bill();                     //FALTARIA VALIDAR QUE NO EXISTA TIPO Y NUMERO
            $bill->setDate($_POST['date']);
            $bill->setType($_POST['type']);
            $bill->setNumber($_POST['number']);
            $bill->setItemList(null);

            $billRepo = new billRepository();
            $billRepo->add($bill);
            session_start();
            $_SESSION['actualBill'] = $bill;
            //$_SESSION['actualBill'] = $bill->getType() . "-" . $bill->getNumber();    //Guardo para poder utilizarla como actual en 
                                                                                      //Los otros formularios
            echo "<script> if(confirm('Factura creada correctamente'));";
            echo "window.location = '../bill-content.php';</script>";

        }else{
            echo "<script> if(confirm('Debes completar todos los campos'))";
            echo "window.location = '../index.php'; </script>";
        }
    }

?>