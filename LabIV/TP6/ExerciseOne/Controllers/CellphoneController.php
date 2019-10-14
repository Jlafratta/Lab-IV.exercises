<?php 

    namespace Controllers;

    use DAO\CellphoneDAO as CellphoneDAO;
    use Models\Cellphone as Cellphone;

    class CellphoneController
    {
        private $cellphoneDAO;

        public function __construct()
        {
            $this->cellphoneDAO = new CellphoneDAO();
        }

        public function ShowAddView()
        {
            require_once(VIEWS_PATH."add-cellphone.php");
        }

        public function ShowListView()
        {
            $cellphoneList = $this->cellphoneDAO->GetAll();

            require_once(VIEWS_PATH."cellphone-list.php");
        }

        public function Add($id , $code, $brand, $model, $price)
        {
            $cellphone = new Cellphone();
            $cellphone->setId($id);
            $cellphone->setCode($code);
            $cellphone->setBrand($brand);
            $cellphone->setModel($model);
            $cellphone->setPrice($price);

            $this->cellphoneDAO->Add($cellphone);


        }
    }
?>