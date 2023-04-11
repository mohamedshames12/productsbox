<?php

    include "../config/connection.php";

    if(isset($_POST['register'])){

        $name = $_POST['name'];
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $password = filter_var($password, FILTER_SANITIZE_STRING);
        $password_confirm = password_verify($_POST['confirm_password'], $password);
        $password_confirm = filter_var($password_confirm, FILTER_SANITIZE_STRING);

        $select_email = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
        $select_email->execute([$email]);
        if($select_email->rowCount() > 0) {
            $warning_msg[] = "your email already exists!";
        }else{
            if($password_confirm == 1){
                $insert_email = $conn->prepare("INSERT INTO `users`( name, email, password) VALUES(?,?,?)");
                $insert_email->execute([$name, $email ,$password]);
                $success_msg[] = "Successfully inserted email!";
                header("location: login.php");
            }else{
                $warning_msg[] = "your passwords do not match!";
            }
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
    <link rel="stylesheet" href="../css/auth.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>ProductBox || Register</title>
</head>
<body>
    <?php include 'headerAuth.php'?>
<div class="container-form">
    <form method="post" action="#">
            <h1>Registration now</h1>
            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <label for="confirm-password">Confirm Password:</label>
            <input type="password" name="confirm_password" required>
            <button type="submit" name="register">Register</button>
            <p>Have an acount?<a href="login.php">Login now</a></p>
        </form>
    </div>
    <?php include 'footerAuth.php'?>
    <script src="../js/auth.js"></script>
    <script src="../js/script.js"></script>
    
    <!-- sweetalert cdnjs link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <?php
        include "../php/alerts.php";
    ?>
</body>
</html>