<?php
    include_once ('model/login.php');
    $action='index';
    if(isset($_GET['action'])){
        $action=$_GET['action'];
    }
    switch($action){
        case 'index':
            header('location:view/signup.php');
        break;
        case 'register':
            $email=$_POST['email'];
            $passWord=$_POST['passWord'];
            $userName=$_POST['userName'];
            $name=$_POST['Name'];
            $address=$_POST['address'];
            $sdt=$_POST['sdt'];
            registerCustomer($name, $userName, $passWord, $sdt,$email, $address);
            /*echo '<script type="text/javascript>
                alert ("Đăng ký thành công");
                window.location="index.php";
            </script>';*/
            header('location: view/thongbaosignin.php');
           
        break;
    }
?>