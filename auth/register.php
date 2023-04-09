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
    <form id="register-form">
            <h1>Registration now</h1>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
            <button type="submit">Register</button>
            <p>Have an acount?<a href="login.php">Login now</a></p>
        </form>
    </div>
    <?php include 'footerAuth.php'?>
    <script src="../js/auth.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>