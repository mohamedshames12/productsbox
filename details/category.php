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
  
    <title>Category</title>
</head>
<body>
    <?php include 'header.php';?>


    
    <section class="products">
        <div class="container all_products">

        <?php
            $category = $_GET['category'];
            $select_product = $conn->prepare("SELECT * FROM products WHERE category = ?");
            $select_product->execute([$category]);
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
                    <img src="../admin/upload/<?= $fetch_products['image']?>" alt="">
                </div>
                <div class="contact">
                    <h1 class="name"><?= $fetch_products['name']?></h1>
                    <p class="price">$<?= $fetch_products['price']?></p>
                </div>
                <div class="btns">
                    <button class="details"> <a href="details.php?pid=<?= $fetch_products['id']?>">show details</a></button>
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