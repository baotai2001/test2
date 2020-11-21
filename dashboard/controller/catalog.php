<?php 
    include_once('model/catalog.php');
    $action='index';
    if(isset($_GET['action']))
    {
    $action=$_GET['action'];
    }
    switch ($action){
        case 'index':
            $showCatalogs = getAllCatalogs();
            include ('view/catalog/catalog.php');
        break;
        case 'addnew': 
            include 'view/catalog/addnew.php';
            break;
        case 'add': 
            $name = $_POST['nameCata'];
            $form = $_POST['form'];
            addNewCatalog($name,$form);
            header('Location: index.php?ctrl=catalog');
        break;
        case 'edit':
            $id = $_GET['id']; 
            $cate = getCatalogByID($id);
            include 'view/catalog/edit.php';
            break;
        case 'update': 
            $id = $_POST['id'];
            $name = $_POST['nameCata'];
            $form = $_POST['form'];
            updateCatalog($id,$name, $form);
            header('Location: index.php?ctrl=catalog');
        break;
        case 'delete': 
            $id = $_GET['id'];
            deleteCatalog($id);
            header('Location: index.php?ctrl=catalog');
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
?>