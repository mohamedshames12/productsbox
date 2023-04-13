<?php

include "../config/connection.php";
session_start();
$admin_id =  $_SESSION["admin_id"];

if (!$admin_id) {
    header("location: ../auth/login.php");
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
    <title>Dashboard</title>
</head>

<body>

    <?php include "headerAdmin.php"; ?>


    <section class="dashboard">
        <div class="container">
            <?php

            $select_admin = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_admin->execute([$admin_id]);
            if ($select_admin->rowCount() > 0) {
                $fetch_admin = $select_admin->fetch(PDO::FETCH_ASSOC);
            ?>
                <div class="box">
                    <h5>welcome</h5>
                    <p><?= $fetch_admin['name'] ?></p>
                </div>

            <?php
            } else {
                echo "<p class='empty'>no admin here!</p>";
            }
            ?>


        </div>
    </section>




    <?php include "footerAdmin.php" ?>
    <!-- file js -->
    <script src="../js/script.js"></script>
</body>

</html>