<?php

    namespace Models;

    class Item
    {
        private $name;
        private $description;
        private $price;
        private $quantity;

        function __construct($name, $description, $price, $quantity)
        {
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
            $this->quantity = $quantity;
        }
    
        function getName()
        {
            return $this->name;
        }

        function setName($name)
        {
            $this->name = $name;
        }

        function getDescription()
        {
            return $this->description;
        }

        function setDescription($description)
        {
            $this->description = $description;
        }

        function getPrice()
        {
            return $this->price;
        }

        function setPrice($price)
        {
            $this->price = $price;
        }

        function getQuantity()
        {
            return $this->quantity;
        }

        function setQuantity($quantity)
        {
            $this->quantity = $quantity;
        }
        
    }

?>