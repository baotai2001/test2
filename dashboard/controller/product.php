<?php
include_once('model/product.php');
include_once('model/catalog.php');
$action = 'index';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
switch ($action) {
    case 'index':
        $showProducts = getAllProducts();
        $showCatalogs = getAllCatalogs();
        include 'view/product/product.php';
        break;
    case 'addnew':
        $showCatalogs = getAllCatalogs();
        include('view/product/add-product.php');
        break;
    case 'add':
        $name = $_POST['nameProduct'];
        $idCata = $_POST['catalogId'];
        $img = $_FILES['imageProduct']['name'];
        $path = 'images/.$img';
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $brand = $_POST['brand'];
        $moTa = $_POST['moTa'];
        $ngayNhap = $_POST['date'];
        $special = $_POST['special'];
        $status = $_POST['status'];
        if (move_uploaded_file($_FILES['imageProduct']['tmp_name'], $path)) {
            addNewProduct($name, $idCata, $img, $quantity, $price, $discount, $brand, $moTa, $ngayNhap, $special, $status);
            echo 'update thanh cong';
        }
        //header('location:index.php?ctrl=product');
        break;
    case 'edit':
        $id = $_GET['id'];
        $product = getProductByID($id);
        $catalogs = getAllCatalogs();
        include('view/product/edit.php');
        break;
    case 'update':
        $id = $_POST['id'];
        $name = $_POST['nameProduct'];
        $idCata = $_POST['catalogId'];
        $img = $_FILES['imageProduct']['name'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $brand = $_POST['brand'];
        $moTa = $_POST['moTa'];
        $ngayNhap = $_POST['date'];
        $special = $_POST['special'];
        $status = $_POST['status'];
        if(!empty($_FILES)){
            $path = 'images/.$img';
            move_uploaded_file($_FILES['imageProduct']['tmp_name'],$path);
            updateProduct($id,$name, $idCata,$img,$quantity,$price,$discount,$brand,$moTa,$ngayNhap,$special,$status);      
        }
        //header('location:index.php?ctrl=product');
    break;
    case'delete':
        $id=$_GET['id'];
        deleteProduct($id);
        header('location:index.php?ctrl=product');
    break;
    case 'deleteCheckbox':
        $ids=array();
        foreach($_POST['chonX'] as $value){
            $ids[]=(int)$value;
        }
        $ids = implode(",",$ids);
        deleteCatalogbyCheckbox($ids);
        header('location:index.php?ctrl=catalog');
     break;
}
