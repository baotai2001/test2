<?php
include_once ('database.php');
function getAllProducts(){
    $sql="select * from sanpham, loaisp where sanpham.maLoai=loaisp.maLoai order by maSP asc";
    return query($sql);
}
function addNewProduct($name, $idCata,$img,$quantity,$price,$discount,$brand,$moTa,$ngayNhap,$special,$status){
    $sql="insert into sanpham(tenSP, maLoai, img, soLuong, donGia, giamGia, brand, moTa, ngayNhap, dacBiet, trangThai)
    values('$name','$idCata','$img','$quantity','$price','$discount','$brand','$moTa','$ngayNhap','$special','$status');
    ";
    execute($sql);
}
function getProductByID($id){
    
    $sql="select * from sanpham where maSP=$id";
    return queryOne($sql);
}
function updateProduct($id,$name, $idCata,$img,$quantity,$price,$discount,$brand,$moTa,$ngayNhap,$special,$status){
    if($img !=''){
    $sql="update sanpham 
    set tenSP='$name', maLoai='$idCata', img='$img', soLuong='$quantity', donGia='$price', giamGia='$discount', brand='$brand',
    moTa='$moTa', ngayNhap='$ngayNhap', dacBiet='$special', trangThai='$status' where maSP='$id'";
    }
    else {
        $sql="update sanpham 
        set tenSP='$name', maLoai='$idCata', soLuong='$quantity', donGia='$price', giamGia='$discount', brand='$brand',
        moTa='$moTa', ngayNhap='$ngayNhap', dacBiet='$special', trangThai='$status' where maSP='$id'";
    }
    execute($sql);
}
function deleteProduct($id){
    $sql="delete from sanpham where maSP=$id";
    execute($sql);
}
