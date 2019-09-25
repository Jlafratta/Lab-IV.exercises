<?php 

    namespace Models;

    class Item
    {
        private $itemName;
        private $description;
        private $price;
        private $quantity;
        
        public function __construct()
        {
            
        }

        public function getItemName()
        {
                return $this->itemName;
        }

        public function setItemName($itemName)
        {
                $this->itemName = $itemName;

        }

        public function getDescription()
        {
                return $this->description;
        }

        public function setDescription($description)
        {
                $this->description = $description;

        }

        public function getPrice()
        {
                return $this->price;
        }

        public function setPrice($price)
        {
                $this->price = $price;

        }

        public function getQuantity()
        {
                return $this->quantity;
        }

        public function setQuantity($quantity)
        {
                $this->quantity = $quantity;

        }
    }
?>