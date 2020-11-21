<div class="container-banner mrbot">
    <div class="banner">
        <img src="Images/banner.jpg" alt="">
    </div>
    <div class="text-banner">
        <p class="dna">'DNA'</p>
        <p class="air">AIR JORDAN XXXV</p>
    </div>
    <div class="shop-now">
        <a href="#">Shop</a>
    </div>
</div>
<p class="text-trending">Trending</p>
<div class="container-trending mrbot">
    <div class="itemsgrid">
        <div>
            <img src="Images/trending1.jpg" alt="">
        </div>
        <div class="text-name-project">
            <p> Nike Blazer Mid '77 Vintage </p>
        </div>
        <div class="shop-now-trending">
            <a href="#">Shop</a>
        </div>
    </div>
    <div class="itemsgrid">
        <div>
            <img src="Images/trending2.jpg" alt="">
        </div>
        <div class="text-name-project">
            <p> Nike Air Force 1 </p>
        </div>
        <div class="shop-now-trending">
            <a href="#">Shop</a>
        </div>
    </div>
</div>
<!-- Featured -->
<p class="text-trending"> Featured </p>
<div class="container-featured mrbot">
    <img src="Images/future.png" alt="">
    <p> No matter where we dance, we move as one.</p>
    <div class="shop-now-featured">
        <a href="#">Shop</a>
    </div>
</div>
<!-- Explore the Wild Run Collection -->
<p class="text-trending"> Explore the Wild Run Collection </p>
<div class="container-collection">
    <?php
        foreach ($products as $value){
            echo '
            <div class="items-collection">
            <div class="items">
                <img src="Images/'.$value['img'].'" alt="">
                <div class="name-collection">
                    <p class="name-items">'.$value['tenSP'].'</p>
                    <p class="nameCata-items">'.$value['tenLoai'].'</p>
                </div>
                <div class="price-items">'.$value['donGia'].'VND</div>
            </div>
        </div>
            ';
        }
    ?>
</div>