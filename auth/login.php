<?php

    include "../config/connection.php";
    session_start();
        
    if(isset($_SESSION["user_id"])){
        $user_id = $_SESSION["user_id"];
    }else{
        $user_id = '';
    }

    if(isset($_POST['login'])){

        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);
        $password = $_POST['password'];
        $password = filter_var($password, FILTER_SANITIZE_STRING);


        $verify_email = $conn->prepare("SELECT * FROM `users` WHERE email = ? LIMIT 1");
        $verify_email->execute([$email]);

        if($verify_email->rowCount() > 0) {
            $fetch = $verify_email->fetch(PDO::FETCH_ASSOC);
            $verfiy_pass = password_verify($password, $fetch['password']);
            if($verfiy_pass == 1){
                if($fetch['user_type'] == 'user'){
                    $_SESSION["user_id"] = $fetch['id'];
                    header('location: ../index.php');
                    $success_msg[] = "Your email or password is correct!";
                }elseif($fetch['user_type'] == 'admin'){
                    $_SESSION["admin_id"] = $fetch['id'];
                    header('location: ../admin/dashbord.php');
                }
            }else{
                $warning_msg[] = "your email or password is incorrect!";
            }
        }else{
            $warning_msg[] = "Incorrect email!";
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

    <title>ProductBox || Login</title>
</head>
<body>
    <?php include 'headerAuth.php'?>
<div class="container-form">
    <form method="post" action="#">
            <h1>Login now</h1>

            <label for="email">Email:</label>
            <input type="email"  name="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <button type="submit" name="login">Login</button>
            <p>Don't have an acount?<a href="register.php">Register now</a></p>
        </form>
    </div>
    <?php include 'footerAuth.php'?>
    <script src="../js/script.js"></script>
    <!-- sweetalert cdnjs link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <?php
        include "../php/alerts.php";
    ?>
</body>
</html>