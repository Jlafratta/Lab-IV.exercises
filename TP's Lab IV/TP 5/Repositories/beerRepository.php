<?php 

    namespace Repositories;

    use Repositories\IBeer as IBeer;
    
    use Models\Beer as Beer;

    class beerRepository
    {
        private $beerList = array();

        function GetJsonFilePath()
        {
            $initialPath = "Data/beer.json";

            if(file_exists($initialPath))
            {
                $jsonFilePath = $initialPath;
            }else{
                $jsonFilePath = "../" . $initialPath;
            }

            return $jsonFilePath;
        }

        public function add(Beer $beer)
        {
            $this->retrieveData();
            array_push($this->beerList, $beer);
            $this->saveData();
        }

        public function delete($code)
        {
            $this->retrieveData();
            $newList = array();

            foreach($this->beerList as $value)
            {
                if($value->getCode() != $code)
                {
                    array_push($newList, $value);
                }
            }
            $this->beerList = $newList;
		    $this->saveData();
        }

        public function getAll()
        {
            $this->retrieveData();
            return $this->beerList;
        }

        private function saveData()
        {
            $arrayToEncode = array();

            foreach($this->beerList as $beer)
            {
                $valuesArray['code'] = $beer->getCode();
                $valuesArray['name'] = $beer->getName();
                $valuesArray['description'] = $beer->getDescription();
                $valuesArray['type'] = $beer->getType();

                array_push($arrayToEncode, $valuesArray);
            }

            $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
            file_put_contents($this->GetJsonFilePath(), $jsonContent);
        }

        private function retrieveData()
        {
            $this->beerList = array();

            $jsonPath = $this->GetJsonFilePath();

            $jsonContent = file_get_contents($jsonPath);

            $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

            foreach($arrayToDecode as $valueArray)
            {
                $beer = new Beer();  
                
                $beer->setCode($valueArray['code']);
                $beer->setName($valueArray['name']);
                $beer->setDescription($valueArray['description']);
                $beer->setType($valueArray['type']);

                array_push($this->beerList, $beer);
            }

        }

        // private function GetJsonFilePath()
        // {
        //     $initialPath = "Data/beer.json";

        //     if(file_exists($initialPath))
        //     {
        //         $jsonFilePath = $initialPath;
        //     }else{
        //         $jsonFilePath = "../" . $initialPath;
        //     }

        //     return $jsonFilePath;
        // }
    }

?>