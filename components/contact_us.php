<?php

    include '../config/connection.php';
    session_start();

    
    if(isset($_SESSION["user_id"])){
        $user_id = $_SESSION["user_id"];
    }else{
        $user_id = '';
    }



    if(isset($_POST["send_message"])){
        if($user_id){

            $name = $_POST['name'];
            $name = filter_var($name, FILTER_SANITIZE_STRING);
            $email = $_POST['email'];
            $email = filter_var($email, FILTER_SANITIZE_STRING);
            $phone = $_POST['phone'];
            $phone = filter_var($phone, FILTER_SANITIZE_STRING);
            $message = $_POST['message'];
            $message = filter_var($message, FILTER_SANITIZE_STRING);

            $select_email = $conn->prepare("SELECT * FROM `messages` WHERE email = ?");
            $select_email->execute([$email]);

            if($select_email->rowCount() > 0) {
                $warning_msg[] = "Your message has been sent successfully!";
            }else {
                $insert_message = $conn->prepare("INSERT INTO `messages`(name, email, phone,message) VALUES(?,?,?,?)");
                $insert_message->execute([$name, $email, $phone, $message]);
                $success_msg[] = "Your message sent successfully!";
            }
        }else {
            $warning_msg[] = "please login first!";
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
  
    <title>ProductBox || Contact Us</title>
</head>
<body>

    <?php include '../details/header.php';?>





    <div class="container-contact">
        <div class="box">
            <form action="#" method="post">
                <h1>Contact Us</h1>
                <label for="name">Name:</label>
                <input type="text" name="name" required>

                <label for="email">Email:</label>
                <input type="email" name="email" required>

                <label for="email">Phone:</label>
                <input type="number" name="phone" required>

                <label for="message">Message:</label>
                <textarea name="message" required></textarea>

                <input type="submit" value="send message" class="btn" name="send_message">
            </form>
        </div>
        <div class="image">
            <img src="../images/contact.png" alt="">
        </div>
    </div>






    <?php include 'footer.php'?>
    <!-- file js menu and scroll -->
    <script src="../js/script.js"></script>
    <!-- file js products home -->
    <!-- <script type="module" src="js/products.js"></script> -->

        <!-- sweetalert cdnjs link -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <?php
        include "../php/alerts.php";
    ?>

</body>
</html>