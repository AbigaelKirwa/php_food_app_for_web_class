<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_login.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="https://res.cloudinary.com/due79afep/image/upload/v1625403924/Group_42_deioms.png" type="image/x-icon">
    <title>Vegan Shop | Log in Page</title>
</head>
<body>
    <div class="container">
        <section class="section-one">
            <div class="navbar-vector">
                <img src="https://res.cloudinary.com/due79afep/image/upload/v1625404259/Path_6_nxnnrb.png" alt="picture">
            </div>
            <div class="navbar">   
                <div class="navbar-logo">
                    <a href="#"><img src="https://res.cloudinary.com/due79afep/image/upload/v1625404461/Group_43_lksb05.png" alt="picture"></a>
                </div>  
                <div>
                    <div class="navbar-list">
                        <div class="navbar-list-links">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="index.php">About</a></li>
                                <li><a href="index.php">Menu</a></li>
                                <li><a href="index.php">Contact</a></li>
                            </ul>
                        </div>
                        <div class="navbar-list-button">
                            <button><a href="#">Log In</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-one-main">
                <div class="section-one-main-pic">
                    <img src="https://res.cloudinary.com/due79afep/image/upload/v1626029118/Group_63_h70cru.png" alt="image">
                </div>
                <div class="section-one-main-words">
                    <h1>Log In</h1>
                    <form method="post" action="admin_login_query.php" >

                    <?php if (isset($_GET['error'])) { ?>

                        <p class="error"><?php echo $_GET['error']; ?></p>

                        <?php } ?>
                        <div class="form_row">
                            <label for="username">Username</label>
                            <input type="text" required name="puname" style="margin-left: 10%;">
                        </div>
                        <div class="form_row">
                            <label for="password">Password</label>
                            <input type="password" required  name="ppass" style="margin-left: 10%;">
                        </div>
                        <!-- <div class="form_row">
                            <label for="email" type="email" style="margin-top: 3%;">Email</label>
                            <input type="text"  name="pmail" style="margin-left: 17%;">
                        </div> -->
                        <!-- <p>Dont have an account? <span><a href="admin_register.php" value='click here'>Sign Up</a></span></p> -->
                        <button type="submit" name="Login">Log In</button>
                        
                    </form>

                </div>
            </div>
        </section>
    </div>
    
</body>
</html>