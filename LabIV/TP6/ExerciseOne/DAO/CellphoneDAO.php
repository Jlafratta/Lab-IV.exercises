<?php 

    namespace DAO;

    use Models\Cellphone as Cellphone;

    class CellphoneDAO implements ICellphoneDAO
    {
        private $cellphoneList = array();

        public function Add(Cellphone $cellphone)
        {
            $this->retrieveData();
            array_push($this->cellphoneList, $cellphone);
            $this->saveData();
        }

        public function Remove($id)
        {
            $this->retrieveData();
            $newList = array();

            foreach($this->cellphoneList as $value)
            {
                if($value->getId() != $id)
                {
                    array_push($newList, $value);
                }
            }
            $this->cellphoneList = $newList;
		    $this->saveData();
        }

        public function GetAll()
        {
            $this->retrieveData();
            return $this->cellphoneList;
        }

        private function saveData()
        {
            $arrayToEncode = array();

            foreach($this->cellphoneList as $cellphone)
            {
                $valuesArray['id'] = $cellphone->getId();
                $valuesArray['code'] = $cellphone->getCode();
                $valuesArray['brand'] = $cellphone->getBrand();
                $valuesArray['model'] = $cellphone->getModel();
                $valuesArray['price'] = $cellphone->getPrice();

                array_push($arrayToEncode, $valuesArray);
            }

            $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
            file_put_contents($this->GetJsonFilePath(), $jsonContent);
        }

        private function retrieveData()
        {
            $this->cellphoneList = array();

            $jsonPath = $this->GetJsonFilePath();

            $jsonContent = file_get_contents($jsonPath);

            $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

            foreach($arrayToDecode as $valueArray)
            {
                $cellphone = new Cellphone();  
                
                $cellphone->setId($valueArray['id']);
                $cellphone->setCode($valueArray['code']);
                $cellphone->setBrand($valueArray['brand']);
                $cellphone->setModel($valueArray['model']);
                $cellphone->setPrice($valueArray['price']);

                array_push($this->cellphoneList, $cellphone);
            }

        }

        function GetJsonFilePath()
        {
            $initialPath = "Data/cellphone.json";

            if(file_exists($initialPath))
            {
                $jsonFilePath = $initialPath;
            }else{
                $jsonFilePath = "../" . $initialPath;
            }

            return $jsonFilePath;
        }
    }
?>