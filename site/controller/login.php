<?php
    include_once ('model/login.php');
    $action='index';
    if(isset($_GET['action'])){
        $action=$_GET['action'];
    }
    switch($action){
        case 'index':
            header('location:view/login.php');
        break;
        case 'login':
            $email=$_POST['userName'];
            $password=$_POST['passWord'];
            $a=login($email,$password);
            $check=$a->fetch();
            if($check!=null)
            {
                if(!isset($_SESSION["user"])){
                    $_SESSION['user']=$check['userName'];
                    $_SESSION['role']=$check['vaiTro'];
                }
                if($_SESSION['role']==1)
                {
                    header('location:../dashboard/index.php');

                }
                else{
                    header('location:index.php');
                }
            }
            else
            {
                echo'Error';
            }
        break;
        case 'logout':
            session_destroy();
            header('location:index.php');
        break;
    }
?>