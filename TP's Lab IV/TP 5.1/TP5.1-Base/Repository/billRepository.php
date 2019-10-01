<?php 

    namespace Repository;

    use Config\Autoload as Autoload;
    Autoload::Start();

    use Models\Bill as Bill;
    use Repository\IBill as IBill;
    
    class billRepository
    {
        private $billList;

        public function getAll()
        {
            $this->retrieveData();
            return $this->billList;
        }

        public function add(Bill $bill)
        {
            $this->retrieveData();
            array_push($this->billList, $bill);
            $this->saveData();
        }

        public function remove($billNumber)
        {
            $this->retrieveData();
            $newList = array();
            foreach($this->billList as $bill)
            {
                if($bill->getNumber() != $billNumber)
                {
                    array_push($newList, $bill);
                }
            }
            $this->billList = $newList;
            $this->saveData();
        }

        private function saveData()
        {
            $arrayToEncode = array();

            foreach($this->billList as $bill)
            {
                $valuesArray['date'] = $bill->getDate();
                $valuesArray['type'] = $bill->getType();
                $valuesArray['number'] = $bill->getNumber();
                $valuesArray['itemList'] = $bill->getItemList();
                array_push($arrayToEncode, $valuesArray);
            }
            $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
            file_put_contents($this->GetJsonFilePath(), $jsonContent);
        }

        private function retrieveData()
        {
            $this->billList = array();

           $jsonFilePath = $this->GetJsonFilePath();

            $jsonContent = file_get_contents($jsonFilePath);
            $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

            foreach($arrayToDecode as $valuesArray)
            {
                $bill = new Bill();
                $bill->setDate($valuesArray['date']);
                $bill->setType($valuesArray['type']);
                $bill->setNumber($valuesArray['number']);
                $bill->setItemList($valuesArray['itemList']);
                array_push($this->billList, $bill);
            }
        }

        private function GetJsonFilePath()
        {
            $initialPath = "Data/bills.json";

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