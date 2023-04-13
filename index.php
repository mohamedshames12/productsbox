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
        <h1 class="heading">products</h1>
        <div class="container">

        <?php
            $select_product = $conn->prepare("SELECT * FROM products ");
            $select_product->execute();
            if($select_product->rowCount() > 0) {
                while($fetch_products = $select_product->fetch(PDO::FETCH_ASSOC)) {
        ?>

        <form action="#" method="post">
        <input type="hidden" name="pid" value="<?= $fetch_products['id']?>">
            <input type="hidden" name="name" value="<?= $fetch_products['name']?>">
            <input type="hidden" name="price" value="<?= $fetch_products['price']?>">
            <input type="hidden" name="description" value="<?= $fetch_products['description']?>">
            <input type="hidden" name="image" value="<?= $fetch_products['image']?>">
            <input type="hidden" name="category" value="<?= $fetch_products['category']?>">
            <div class="box">
                <div class="image">
                    <img src="admin/upload/<?= $fetch_products['image']?>" alt="">
                </div>
                <div class="contact">
                    <h1 class="name"><?= $fetch_products['name']?></h1>
                    <p class="price">$<?= $fetch_products['price']?></p>
                    <a href="details/category.php?category=<?= $fetch_products['category']?>" class="categoryLink"><?= $fetch_products['category']?></a>
                </div>
                <div class="btns">
                    <input type="number" min="1" max="10" class="qty" name="qty" required>
                    <button class="add-to-cart" type="submit"><i class="fas fa-shopping-cart"></i> add to cart</button>
                </div>
            </div>
        </form>


        <?php
                }
            }else {
                echo "<p class='empty'>no products added yet!</p>";
            }
        
        ?>
      
        </div>
        <a href="components/products.php" class="ALL_PRODUCTS">All Products</a>
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