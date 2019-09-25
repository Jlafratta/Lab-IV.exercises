<?php 

    namespace Models;

    class Bill
    {
        private $date;
        private $type;
        private $number;
        private $itemList;


        public function __construct()
        {
            
        }

        public function getDate()
        {
                return $this->date;
        }

        public function setDate($date)
        {
                $this->date = $date;

        }

        public function getType()
        {
                return $this->type;
        }

        public function setType($type)
        {
                $this->type = $type;

        }

        public function getNumber()
        {
                return $this->number;
        }

        public function setNumber($number)
        {
                $this->number = $number;

        }

        public function getItemList()
        {
                return $this->itemList;
        }

        public function setItemList($itemList)
        {
                $this->itemList = $itemList;

        }
    }
?>