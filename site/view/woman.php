<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ - Rep 1:1 Real</title>
    <link rel="stylesheet" href="css/woman.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="men-menu">
            <p class="text-trending">Woman</p>
            <ul>
                <li><a href="">Shoes</a></li>
                <li><a href="">Clothing</a></li>
                <li><a href="">Shoes</a></li>
            </ul>
        </div>  
    <div class="container-banner mrbot">
        <div class="banner">
            <img src="Images/womanbanner.jpg" alt="">
        </div>
        <div class="text-banner">
            <p class="dna">'DNA'</p>
            <p class="air">AIR JORDAN XXXV</p>
        </div>
        <div class="shop-now">
            <a href="#">Shop</a>
        </div>
    </div>
    <!-- icon -->
    <p class="text-trending">Trending This Week </p>
    <div class="container-trending2 mrbot">
        <?php
                    foreach($womantrend1 as $value){
                        echo '
                        <div class="itemsgrid2">
                        <a href="index.php?ctrl=product&action=detail&id='.$value['maSP'].'">

                    <div>
                        <img src="Images/'.$value['img'].'" alt="">
                    </div>
                    <div class="boxcenter1">
                        <nav>
                            <div class="p1">
                                <p class="name1">'.$value['tenSP'].' </p>
                                <p class="name2" style="color: gray;opacity: 5px;margin-top: -50px;"> Shoe</p>
                            </div>
                            <div class="p2">
                                <p class="price">3,239,000₫</p>
                            </div>
                        </nav>
                    </div>
                    </a>
                </div>
               
                        ';
                    }
                ?>
    </div>
    <!--treding-->
    <p class="text-trending">Trending </p>
    <div class="container-trending mrbot">
        <div class="itemsgrid">
            <div>
                <img src="image/women.jpg" alt="">
            </div>
            <div class="text-name-project">
                <a href="#"> Our Latest Sports Bras </a>
            </div>
            <div class="shop-now-trending">
                <a href="#">Shop</a>
            </div>
        </div>
        <div class="itemsgrid">
            <div>
                <img src="image/giay.jpg" alt="">
            </div>
            <div class="text-name-project">
                <a href="#"> Air Force 1 Pixel </a>
            </div>
            <div class="shop-now-trending">
                <a href="#">Shop</a>
            </div>
        </div>
    </div>
    <!-- Future -->
    <p class="text-trending">Featured </p>
    <div class="container-banner mrbot">
        <div class="banner">
            <img src="image/womens-shoes-clothing-accessories.jfif" alt="">
        </div>
        <p class="term2">
            <a href="#">SISTERHOOD OF SPORT COLLECTION</a>
        </p>
        <p class="term">
            <a href="#">Inspired by the sisterhood of basketball, designed to reflect your own personal style, on
                and off the court</a>
        </p>

    </div>
    <!--bar-->
    <p class="text-trending">The Essentials</p>
    <div class="container-trending2 mrbot">
        <?php
                    foreach($womantrend2 as $value){
                        echo '
                        
                        <div class="itemsgrid2">
                        <a href="index.php?ctrl=product&action=detail&id='.$value['maSP'].'">

                    <div>
                        <img src="Images/'.$value['img'].'" alt="">
                    </div>
                    <div class="boxcenter1">
                        <nav>
                            <div class="p1">
                                <p class="name1">'.$value['tenSP'].' </p>
                                <p class="name2" style="color: gray;opacity: 5px;margin-top: -50px;"> Shoe</p>
                            </div>
                            <div class="p2">
                                <p class="price">3,239,000₫</p>
                            </div>
                        </nav>
                    </div>
                    </a>
                </div>
               
                        ';
                    }
                ?>
    </div>
    <!--bottom-->

    </main>

    </div>

</body>

</html>