<?php 
include_once('database.php');
function registerUser($name,$email,$password){
    $sql="insert into admin(name, email, password) 
    values ('$name','$email',MD5('$password'))";
    execute($sql);
}
function login($email,$password){
    $sql="select * from nguoidung
    where userName='$email' and passWord=md5('$password')";
    return query($sql);

}
function registerCustomer($name, $userName, $passWord, $sdt,$email, $address){
    $sql="insert into nguoidung(tenND, email,sdt, userName, passWord, diaChi) values('$name', '$email', '$sdt', '$userName',md5('$passWord'), '$address')";
    execute($sql);
}
?>