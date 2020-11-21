<?php 
include_once('model/product.php');
$action='index';
switch($action){
    case 'index':
       
        $products=getProductTrend();
        include('view/home.php');
    break;
}
    
?>