<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Products</title>
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

        </div>
    </section>
    <!-- file js menu and scroll -->
    <script src="js/script.js"></script>
    <!-- file js products home -->
    <script type="module" src="js/products.js"></script>
</body>
</html>