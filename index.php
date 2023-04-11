<?php

    include 'config/connection.php';
    session_start();

    
    if(isset($_SESSION["user_id"])){
        $user_id = $_SESSION["user_id"];
    }else{
        $user_id = '';
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
    <title>ProductBox</title>
</head>
<body>
    <?php include 'header.php';?>

    <section class="home">
        <div class="box">
            <h1>Product classification <span></span></h1>
            <div class="animation-home"></div>
            <p>Many of these types of product information are regulated to some degree</p>
            <a href="about.php" class="btn">show more</a>
        </div>
    </section>

    <section class="section">
        <h1 class="heading">sections</h1>
        <div class="container">
            <div class="box">
                <div class="image">
                    <img src="images/Fashion trends you like.avif" alt="">
                </div>
                <div class="contact">
                    <h4>Fashion trends you like</h4>
                    <a href="cart/Fashion_trends_you_like.php" class="btn">Explore more</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/Gaming accessories.avif" alt="">
                </div>
                <div class="contact">
                    <h4>Gaming accessories</h4>
                    <a href="cart/Gaming_accessories.php" class="btn">Explore more</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/Get fit at home.avif" alt="">
                </div>
                <div class="contact">
                    <h4>Get fit at home</h4>
                    <a href="cart/Get_fit_at_home.php" class="btn">Explore more</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/laptops.avif" alt="">
                </div>
                <div class="contact">
                    <h4>laptops</h4>
                    <a href="cart/Laptops.php" class="btn">Explore more</a>
                </div>
            </div>
        </div>
    </section>
    

    <section class="products">
        <h1 class="heading">products</h1>
        <div class="container">
            <div class="box">
                <div class="image">
                    <img src="images/c-d-x-PDX_a_82obo-unsplash.jpg" alt="">
                </div>
                <div class="contact">
                    <h1 class="name">Bluetooth Headset</h1>
                    <p class="price">$300</p>
                </div>
                <div class="btns">
                    <button class="details"> <a href="details/details.php">show details</a></button>
                    <button class="add-to-cart" type="submit"><i class="fas fa-shopping-cart"></i> add to cart</button>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/chris-taljaard-S__3xvlGDe8-unsplash.jpg" alt="">
                </div>
                <div class="contact">
                    <h1 class="name">PlayStation DualSense Wireless Controller</h1>
                    <p class="price">$109</p>
                </div>
                <div class="btns">
                    <button class="details"> <a href="details/details.php">show details</a></button>
                    <button class="add-to-cart" type="submit"><i class="fas fa-shopping-cart"></i> add to cart</button>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/christian-wiediger-KV2vFOYItcY-unsplash.jpg" alt="">
                </div>
                <div class="contact">
                    <h1 class="name">STGAubron Gaming PC Diamond Black</h1>
                    <p class="price">$700</p>
                </div>
                <div class="btns">
                    <button class="details"> <a href="details/details.php">show details</a></button>
                    <button class="add-to-cart" type="submit"><i class="fas fa-shopping-cart"></i> add to cart</button>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/clayton-malquist-KVCN2hMTk1E-unsplash.jpg" alt="">
                </div>
                <div class="contact">
                    <h1 class="name">Lenovo Ideapad 15.6' HD Laptop</h1>
                    <p class="price">$450</p>
                </div>
                <div class="btns">
                    <button class="details"> <a href="details/details.php">show details</a></button>
                    <button class="add-to-cart" type="submit"><i class="fas fa-shopping-cart"></i> add to cart</button>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/kenny-eliason-Pvx24X1uiq4-unsplash.jpg" alt="">
                </div>
                <div class="contact">
                    <h1 class="name">Apple iPhone 14 Pro Max</h1>
                    <p class="price">$6410</p>
                </div>
                <div class="btns">
                    <button class="details"> <a href="details/details.php">show details</a></button>
                    <button class="add-to-cart" type="submit"><i class="fas fa-shopping-cart"></i> add to cart</button>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/frankie-VghbBAYqUJ0-unsplash.jpg" alt="">
                </div>
                <div class="contact">
                    <h1 class="name">memzuoix 2.4G Wireless Mouse</h1>
                    <p class="price">$3750</p>
                </div>
                <div class="btns">
                    <button class="details"> <a href="details/details.php">show details</a></button>
                    <button class="add-to-cart" type="submit"><i class="fas fa-shopping-cart"></i> add to cart</button>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/onur-binay-8OQt1zTnJeE-unsplash.jpg" alt="">
                </div>
                <div class="contact">
                    <h1 class="name">Mens Watches Ultra</h1>
                    <p class="price">$1150</p>
                </div>
                <div class="btns">
                    <button class="details"> <a href="details/details.php">show details</a></button>
                    <button class="add-to-cart" type="submit"><i class="fas fa-shopping-cart"></i> add to cart</button>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/sebastian-banasiewcz-CMs6ZGOdyho-unsplash.jpg" alt="">
                </div>
                <div class="contact">
                    <h1 class="name">Computer Keyboard Wired</h1>
                    <p class="price">$959</p>
                </div>
                <div class="btns">
                    <button class="details"> <a href="details/details.php">show details</a></button>
                    <button class="add-to-cart" type="submit"><i class="fas fa-shopping-cart"></i> add to cart</button>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/ryan-hoffman-6Nub980bI3I-unsplash.jpg" alt="">
                </div>
                <div class="contact">
                    <h1 class="name">T-Shirt</h1>
                    <p class="price">$50</p>
                </div>
                <div class="btns">
                    <button class="details"> <a href="details/details.php">show details</a></button>
                    <button class="add-to-cart" type="submit"><i class="fas fa-shopping-cart"></i> add to cart</button>
                </div>
            </div>
        </div>
    </section>



    <section class="category">
        <h1 class="heading">shop by category</h1>
        <div class="swiper-wrapper">
        <div class="container">
            <div class="box ">
                <img src="images/laptop.png" alt="">
                <p>laptop</p>
            </div>
            <div class="box">
                <img src="images/mouse.png" alt="">
                <p>mouse</p>
            </div>
            <div class="box">
                <img src="images/washing-machine.png" alt="">
                <p>washing machine</p>
            </div>
            <div class="box">
                <img src="images/smart-watch.png" alt="">
                <p>smart watch</p>
            </div>
            <div class="box">
                <img src="images/fridge.png" alt="">
                <p>fridge</p>
            </div>
            <div class="box">
                <img src="images/camera.png" alt="">
                <p>camera</p>
            </div>
            <div class="box">
                <img src="images/mobile-phone.png" alt="">
                <p>mobile phone</p>
            </div>
        </div>
        </div>
    </section>



   
    <section class="products">
    <h1 class="heading">Beauty and Personal Care</h1>
        <div class="container">
            <div class="box">
                <div class="image">
                    <img src="images/maksim-larin-NOpsC3nWTzY-unsplash.jpg" alt="">
                </div>
                <div class="contact">
                    <h1 class="name">Ryka Women's Plus 2 Walking Shoe</h1>
                    <p class="price">$120</p>
                </div>
                <div class="btns">
                    <button class="details"> <a href="details/details.php">show details</a></button>
                    <button class="add-to-cart" type="submit"><i class="fas fa-shopping-cart"></i> add to cart</button>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/qasim-malick-Yh9FrbN5Bts-unsplash.jpg" alt="">
                </div>
                <div class="contact">
                    <h1 class="name">Desigual Women's Woman Sweat Long</h1>
                    <p class="price">$119</p>
                </div>
                <div class="btns">
                    <button class="details"> <a href="details/details.php">show details</a></button>
                    <button class="add-to-cart" type="submit"><i class="fas fa-shopping-cart"></i> add to cart</button>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/raquel-gambin-kS3YkVtf85U-unsplash.jpg" alt="">
                </div>
                <div class="contact">
                    <h1 class="name">Ryka Women's, Echo Knit Slip-On Sneaker</h1>
                    <p class="price">$260</p>
                </div>
                <div class="btns">
                    <button class="details"> <a href="details/details.php">show details</a></button>
                    <button class="add-to-cart" type="submit"><i class="fas fa-shopping-cart"></i> add to cart</button>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/ryan-plomp-jvoZ-Aux9aw-unsplash.jpg" alt="">
                </div>
                <div class="contact">
                    <h1 class="name">MYSMOCK Professional Smock</h1>
                    <p class="price">$199</p>
                </div>
                <div class="btns">
                    <button class="details"> <a href="details/details.php">show details</a></button>
                    <button class="add-to-cart" type="submit"><i class="fas fa-shopping-cart"></i> add to cart</button>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/dusabimana-aimable-pSb2jm6C9E0-unsplash.jpg" alt="">
                </div>
                <div class="contact">
                    <h1 class="name">Salon Cape for Women</h1>
                    <p class="price">$450</p>
                </div>
                <div class="btns">
                    <button class="details"> <a href="details/details.php">show details</a></button>
                    <button class="add-to-cart" type="submit"><i class="fas fa-shopping-cart"></i> add to cart</button>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/joanna-kosinska-mVdzV_HTyH4-unsplash.jpg" alt="">
                </div>
                <div class="contact">
                    <h1 class="name">Maybelline Lash Sensational Sky High</h1>
                    <p class="price">$3750</p>
                </div>
                <div class="btns">
                    <button class="details"> <a href="details/details.php">show details</a></button>
                    <button class="add-to-cart" type="submit"><i class="fas fa-shopping-cart"></i> add to cart</button>
                </div>
            </div>

        </div>
    </section>


    <section class="subscribe">
        <h1 class="heading">subscribe us</h1>
        <div class="container-sub">
            <form method="">
                <input type="text" placeholder="enter your email">
                <button type="submit">subscribe</button>
            </form>
        </div>
    </section>

    <?php include 'footer.php'?>
    <!-- file js menu and scroll -->
    <script src="js/script.js"></script>
    <!-- file js products home -->
    <!-- <script type="module" src="js/products.js"></script> -->

</body>
</html>