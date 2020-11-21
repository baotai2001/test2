<?php
    include_once('database.php');
    function getProductTrend(){
        $sql="select * from sanpham, loaisp where sanpham.maLoai=loaisp.maLoai limit 3";
        return query($sql);
    }
    function getProductWomanTrend1(){
        $sql="select * from sanpham limit 0,3";
        return query($sql);
    }
    function getProductWomanTrend2(){
        $sql="select * from sanpham limit 3,6";
        return query($sql);
    }
    function getProductById($id){
        $sql="select * from sanpham where maSP=$id";
        return queryOne($sql);
    }
?>