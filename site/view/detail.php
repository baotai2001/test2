<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ - Rep 1:1 Real</title>
    <link rel="stylesheet" href="css/detail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
</head>
<body>
 
    <main>
        <!-- Banner -->
        <div class="banner-free-delivery mb">
            <p> FREE DELIVERY TO YOU </p>
            <p class="get-free"> Get Free Standard Delivery On All Orders. </p>
            <a href="#">See Details</a>
        </div>
        <div class="boxcenter">
            <!-- Chi tiet san pham -->
            <?php
            echo '
            <div class="details-product">
            <div class="image-1">
                <img src="Images/'.$detail['img'].'" alt="">
            </div>
            <div class="image-2">
            <img src="Images/'.$detail['img'].'" alt="">
            </div>
            <!-- Thong tin san pham -->
            <div class="details-item">
                <div class="name-iems">
                    <h2>Mens Running Shoe</h2>
                    <h1 class="name-product"> '.$detail['tenSP'].'</h1>
                </div>
                <span class="price-product">'.$detail['donGia'].'</span>
                <!-- Kich co -->
                <fieldset class="mb line">
                    <p style="font-size: 15pt;">Select Size</p>
                    <div class="grid-size">
                        <div class="grid-number-size">
                            <input type="radio" id="items-1" class="visually-hidden">
                            <label for="items-1" tabindex="-1" class="label-size"> EU 40 </label>
                        </div>
                        <div class="grid-number-size">
                            <input type="radio" id="items-3" class="visually-hidden">
                            <label for="items-3" tabindex="-1" class="label-size"> EU 40 </label>
                        </div>
                        <div class="grid-number-size">
                            <input type="radio" id="items-2" class="visually-hidden">
                            <label for="items-2" tabindex="-1" class="label-size"> EU 40 </label>
                        </div>
                    </div>
                </fieldset>
                <!-- Them vao gio hang -->
                <div class="add-to-bag">
                    <a href="#"> Add to Bag </a>
                </div>
                <!-- Them vao yeu thich -->
                <div class="add-favourite mb">
                    <a href="#"> Favourite <i class="fa fa-heart-o"></i> </a>
                </div>
                <!-- Mo ta-->
                <div class="description-preview mb">
                    <p>
                        Reinvigorate your stride with the Nike Air Zoom Pegasus 37. 
                        Delivering the same fit and feel that runners love, the shoe has an all-new forefoot cushioning unit and foam for maximum responsiveness. 
                        The result is a durable, lightweight trainer designed for everyday running.
                    </p>
                    <ul>
                        <li> Colour Shown: Black/Anthracite/White/Bright Mango </li>
                        <li> Style: BQ9646-010 </li>
                    </ul>
                    <div class="description-details">
                        <button>
                            <span> View Product Details </span>
                        </button>
                    </div>
                </div>
                <!-- Chinh sach giao hang va tra hang -->
                <div class="delivery-return">
                    <button>
                        <h3> Free Delivery and Returns <i class="fa fa-angle-down" style="font-size: 25px;margin-left: 30px;"></i> </h3>
                    </button>
                </div>
            </div>
        </div>
            ';
            ?>
        
        <div class="evolved-fit">
            <h3> Evolved Fit </h3>
            <p> A midfoot band adapts to the size of your foot, keeping you comfortable and secure with every step. </p>
        </div>
    
    <!-- Co the ban thich -->
    <div class="you-might-like">
        <h3> YOU MIGHT ALSO LIKE </h3>
        <div class="container-collection">
            <!-- Item 1 -->
            <div class="items-collection">
                <div class="items">
                <img src="Images/essential-wild-run-woven-running-trousers-hbW3Fj.jpg" alt="">
                <div class="name-collection">
                    <p class="name-items">Nike Essential Wild Run</p>
                    <p class="nameCata-items">Men's Woven Running Trousers</p>
                </div>
                <div class="price-items">1,739,000₫</div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="items-collection">
                <div class="items">
                <img src="Images/dri-fit-miler-wild-run-running-top-hcMc1f.jpg" alt="">
                <div class="name-collection">
                    <p class="name-items">Nike Dri-FIT Miler Wild Run</p>
                    <p class="nameCata-items">Men's Running Top</p>
                </div>
                <div class="price-items">919,000₫</div>
            </div>
            </div>
            <!-- Item 3 -->
            <div class="items-collection">
                <div class="items">
                <img src="Images/challenger-wild-run-graphic-running-shorts-2sCGzl.jpg" alt="">
                <div class="name-collection">
                    <p class="name-items">Nike Dri-FIT Run Wild Run</p>
                    <p class="nameCata-items">Men's Graphic Running Shorts</p>
                </div>
                <div class="price-items">819,000₫</div>
            </div>
            </div>
        </div>
    </div>
</div>
    </main>
    <script>
        window.onscroll = function() {scrollFunction()};
      function scrollFunction() {
        if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
          document.getElementById("navbar").style.position = "fixed";
          document.getElementById("navbar").style.animationName="truot";
          document.getElementById("navbar").style.zIndex="100";
          document.getElementById("navbar").style.animationDuration="0.7s";
          document.getElementById("navbar").style.animationIterationCount="1";
          document.getElementById("navbar").style.background="#fff";
          document.getElementById("navbar").style.top="0"; 
          document.getElementById("navbar").style.width="93%";
        } else {
          document.getElementById("navbar").style.position = "relative";
          document.getElementById("navbar").style.animationName="";
          document.getElementById("navbar").style.width="100%";
        }
      }
    </script>
</body>
</html>