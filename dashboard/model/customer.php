<?php
    include_once ('database.php');
    function getAllCustomer(){
        $sql="select * from nguoidung";
        return query($sql);
    }
?>