<?php
include_once ('database.php');
function getAllCatalogs(){
    $sql = "select * from loaisp";
    return query($sql);
}
function deleteCatalogbyCheckbox($ids)
    {
        $sql="DELETE FROM `loaisp` WHERE maLoai IN ($ids)";
        execute($sql);
    }
function getCatalogByID($id){
    $sql= "select * from loaisp where maLoai =$id";
    return queryOne($sql);
}
function updateCatalog($id, $name, $form){
    $sql = "update loaisp set tenLoai ='$name', form='$form' where maLoai=$id";
    execute($sql);
}
function addNewCatalog($name,$form){
    $sql="insert into loaisp(tenLoai, form) values('$name','$form')";
    execute($sql);
}
function deleteCatalog($id){
    $sql="delete from sanpham where maSP=$id";
    execute($sql);
}
?>