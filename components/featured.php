<?php

    include '../config/connection.php';
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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
    <title>ProductBox || Featured</title>
</head>
<body>

    <?php include '../details/header.php';?>


    <section class="products all_products">
        <h1 class="heading">products</h1>
        <div class="container">

        <?php
            $select_product = $conn->prepare("SELECT * FROM featured");
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
            <div class="box">
            <p class="new">Featured</p>
                <div class="image">
                    <img src="../admin/upload/<?= $fetch_products['image']?>" alt="">
                </div>
                <div class="contact">
                    <h1 class="name"><?= $fetch_products['name']?></h1>
                    <p class="price">$<?= $fetch_products['price']?></p>
                </div>
                <div class="btns">
                    <input type="number"  min="1" max="10" class="qty" name="qty" required>
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
        
    </section>

    <?php include 'footer.php'?>
    <!-- file js menu and scroll -->
    <script src="../js/script.js"></script>
    <!-- file js products home -->
    <!-- <script type="module" src="js/products.js"></script> -->

</body>
</html>