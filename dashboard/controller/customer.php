<?php
    include_once ('model/customer.php');
    $action='index';
    if(isset($_GET['action'])){
        $action=$_GET['action'];
    }
    switch($action){
        case 'index':
            $showCustomer=getAllCustomer();
            include('view/customer/customer.php');
        break;
    }
?>