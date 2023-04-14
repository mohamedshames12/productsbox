<?php

    include "../config/connection.php";
    session_start();
    $admin_id =  $_SESSION["admin_id"];

    if (!$admin_id) {
        header("location: ../auth/login.php");
    }


    if(isset($_POST["add_product"])) {

        $name = $_POST["product_name"];
        $name = filter_var($name, FILTER_SANITIZE_STRING);

        $product_price = $_POST["product_price"];
        $product_price = filter_var($product_price, FILTER_SANITIZE_STRING);


        $product_description = $_POST["product_description"];
        $product_description = filter_var($product_description, FILTER_SANITIZE_STRING);


        $image = $_FILES['image']['name'];
        $image = filter_var($image, FILTER_SANITIZE_STRING);
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = 'upload/'.$image;

        if(!empty($image)){
            if($image_size > 20000000){
                $warning_msg[] = "image size is too large!";
            }else{
                move_uploaded_file($image_tmp_name, $image_folder);
            }
        }


        

        $select_product = $conn->prepare("SELECT * FROM new_prodacts WHERE name = ?");
        $select_product->execute([$name]);

        if($select_product->rowCount() > 0){
            $warning_msg[] = "porduct already added";
        }else{
            $insert_products =  $conn->prepare("INSERT INTO new_prodacts(name, price, description,image) VALUES(?,?,?,?)");
            $insert_products->execute([$name, $product_price, $product_description ,$image]);
            $success_msg[] = "Product successfully!";
        }




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
    <link rel="stylesheet" href="../css/styleAdmin.css">
    <title>Add New Products</title>
</head>

<body>

    <?php include "headerAdmin.php"; ?>



    <div class="container">
        <form action="#" method="post" enctype="multipart/form-data">
            <h2>Add new Product</h2>
            <label for="product-name">Product Name:</label>
            <input type="text" name="product_name" required>

            <label for="product-price">Price:</label>
            <input type="number" id="product-price" name="product_price" required>

            <label for="product-description">Description:</label>
            <textarea id="product-description" name="product_description" required></textarea>

            <label for="product-image">Image:</label>
            <input type="file" id="product-image" name="image" accept="image/*" class="image" required>

            <input type="submit" value="Add Product" name="add_product" class="btn_add">
        </form>
    </div>



    <?php include "footerAdmin.php" ?>
    <!-- file js -->
    <script src="../js/script.js"></script>

        <!-- sweetalert cdnjs link -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <?php
            include "../php/alerts.php";
        ?>
</body>
</html>