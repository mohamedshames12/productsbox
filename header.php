<header class="header" id="header">
    <a href="index.php" class="logo">Products<span>box</span></a>
    <div class="animation"></div>
    <nav class="navbar">
        <div class="links">
            <a href="index.php">home</a>
            <a href="components/products.php">Products</a>
            <a href="Home">New Products</a>
            <a href="Home">contact us</a>
            <a href="Home">Featured</a>
        </div>
    </nav>
    <i class="fa-solid fa-xmark" id="close-menu"></i>
    <div class="icons">
        <div class="user">
           <i class="fas fa-user" id="user"></i>
           <?php
                $select_user = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
                $select_user->execute([$user_id]);
                if($select_user->rowCount() > 0) {
                    $fetch_user = $select_user->fetch(PDO::FETCH_ASSOC);
                    ?>
                     <div class="logdin-user">
                            <p> your name is: <span><?= $fetch_user['name']?></span></p>
                            <a href="#" class="updata">update profile</a>
                            <a href="auth/logout.php" onclick="return confirm('logout this website?');">logout</a>
                            <i class="fa-solid fa-xmark" id="close-user"></i>
                    </div>
                    <?php
                }else{
                    ?>

                    <?php
                }
           ?>

        </div>
        <a href="cart.php"><i class="fas fa-shopping-cart"><span>(2)</span></i></a>
        <i class="fas fa-thin fa-bars" id="menu"></i>
    </div>
</header>