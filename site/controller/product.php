<?php
include_once('model/product.php');
$action='woman';
if(isset($_GET['action'])){
    $action=$_GET['action'];
}

switch($action){
    case 'woman':
        $womantrend1=getProductWomanTrend1();
        $womantrend2=getProductWomanTrend2();
        include('view/woman.php');
    break;
    case 'men':
        $mentrend1=getProductWomanTrend1();
        $mentrend2=getProductWomanTrend2();
        include ('view/men.php');
    break;
    case 'detail':
        $id=$_GET['id'];
        $detail=getProductByID($id);
        include('view/detail.php');
    break;
}

?>