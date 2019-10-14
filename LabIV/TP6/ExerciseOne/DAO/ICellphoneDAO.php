<?php 

    namespace DAO;

    interface ICellphoneDAO
    {
        function Add(Cellphone $cellphone);
        function Remove($id);
        function GetAll();
    }
?>