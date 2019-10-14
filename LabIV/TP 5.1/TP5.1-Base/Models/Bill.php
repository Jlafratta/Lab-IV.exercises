<?php 

    namespace Models;

    use Models\Item as Item;

    class Bill
    {
        private $date;
        private $type;
        private $number;
        private $itemList = array();


        public function __construct()
        {
            
        }

        public function addItem(Item $item)
        {
                if($this->itemList == null)
                {
                        $this->itemList = array();
                        array_push($this->itemList, $item);
                }else{
                        array_push($this->itemList, $item);
                }
                
        }

        public function getSubtotal()
        {
                $subtotal = 0;
                if($this->itemList != null)
                {
                        foreach($this->itemList as $item)
                        {
                                $subtotal = $subtotal + ($item->getPrice() * $item->getQuantity());
                        }
                }
                        
                return $subtotal;
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