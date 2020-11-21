<!DOCTYPE html>
<?php
session_start();
ob_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ - Rep 1:1 Real</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">



</head>

<body>
    <div class="top-bar">
        <div class="boxcenter">
            <div class="logo"><a href="#"><img src="Images/1200px-Jumpman_logo.svg.png" alt=""></a></div>

            <?php
                
                if(isset($_SESSION['user'])){
                    echo '
                    <div class="help-user-menu">
                        <a>Bạn đã đăng nhập với account '.$_SESSION['user'].'</a>
                        <a href="index.php?ctrl=login&action=logout">Logout</a>
                    </div>
                    ';
            
                }
                else {
                    echo '
                    <div class="help-user-menu">
                        <a href="#"> Help </a> |
                        <a href="#"> Contact </a> |
                        <a href="index.php?ctrl=signup"> Join Us </a> |
                        <a href="index.php?ctrl=login"> Sign In </a> |
                    </div>
                ';
                }
            ?>
        </div>
    </div>
    <div class="boxcenter">
        <nav>
            <div class="logo-shop">
                <a href="index.php"> <img src="Images/logo-shop.png" alt=""> </a>
            </div>
         <?php
            include('view/menu.php');
         ?>
            <div class="user-search">
                <form action="" method="get">
                    <div class="search">
                        <button class="btnsearch" type="submit"><i class="fa fa-search"
                                style="font-size:20px;"></i></button>
                        <input type="search" id="user-search" name="user-search" placeholder="01,Nike,...">
                    </div>
                    <button class="favorite" type="submit"><i class="fa fa-heart-o"
                            style="font-size:30px;"></i></button>
                    <a href="#"><i class="fa fa-shopping-bag" style="font-size:30px"></i></a>
                </form>
            </div>
        </nav>
        <main>
            <!-- Banner -->
            
            <!-- Trending -->
           
                <?php
                    $ctrl = 'home';
                    if (isset($_GET['ctrl'])) {
                        $ctrl = $_GET['ctrl'];
                    }
                    include 'controller/'.$ctrl.'.php';
                ?>

           
        </main>
    </div>
    <!-- Footer -->
    <div class="full footer">
        <div class="boxcenter">
            <div class="footer-trai">
                <ul class="footer-mot">
                    <li> <a href="#" class="gach">FIND A STORE </a></li>
                    <li> <a href="#" class="gach">BECOME A MEMBER </a></li>
                    <li> <a href="#" class="gach">SEND US FOR EMAIL </a></li>
                    <li> <a href="#" class="gach">SEND US FEEDBACK </a></li>
                </ul>
                <ul class="footer-hai">

                    <li> <a href="#" class="gach">GET HELP </a></li>
                    <li> <span href="#" class="gach">Order Status </span></li>
                    <li> <span href="#" class="gach">Delivery </span></li>
                    <li> <span href="#" class="gach">Returns </span></li>
                    <li> <span href="#" class="gach">Payment Options </span></li>
                </ul>
                <ul class="footer-ba">
                    <li> <a href="#" class="gach"> ABOUT NIKK </a></li>
                    <li> <span href="#" class="gach">News </span></li>
                    <li> <span href="#" class="gach">Careers </span></li>
                    <li> <span href="#" class="gach">Investors </span></li>
                    <li> <span href="#" class="gach"> Sustainability</span></li>
                </ul>

            </div>
            <div class="footer-phai">
                <i class="fa fa-twitter-square" style="font-size:38px ; color:darkgrey"></i>
                <i class='fab fa-facebook' style='font-size:38px; color:darkgrey'></i>
                <i class="fa fa-youtube-square" style="font-size:38px;color:darkgrey"></i>
                <i class="fa fa-instagram" style="font-size:38px; color:darkgrey"></i>

            </div>
        </div>
    </div>
</body>

</html>
<?php 
ob_flush();
?>