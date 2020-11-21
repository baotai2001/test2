<?php
function getConnection()
{
    $dsn="mysql:host=localhost;dbname=du-an-1";
    $user='root';
    $pass='';
    $db=new PDO($dsn,$user,$pass,
                array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $db;
}
function query($sql){
    $connect=getConnection();
    $result =$connect->query($sql);
    return $result;
}
function queryOne($sql){
    $connect=getConnection();
    $result=$connect->query($sql);
    $row=$result->fetch(PDO::FETCH_ASSOC);
    return $row;
}
function execute($sql){
    $connect=getConnection();
    $result=$connect->exec($sql);
    return $result;
}
function executeReturnID($sql)
{
    $connect=getConnection();
    $connect->exec($sql);
    return $connect->lastInsertId();
}

?>