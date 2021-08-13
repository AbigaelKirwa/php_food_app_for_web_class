<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_register.css">
    <link rel="shortcut icon" href="https://res.cloudinary.com/due79afep/image/upload/v1625403924/Group_42_deioms.png" type="image/x-icon">
    <title>Vegan Shop | Sign Up Page</title>
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
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Menu</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="navbar-list-button">
                            <button><a href="login.html">Log In</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-one-main">
                <div class="section-one-main-pic">
                    <img src="https://res.cloudinary.com/due79afep/image/upload/v1626029116/Group_64_mblezv.png" alt="image">
                </div>
                <div class="section-one-main-words">
                    <h1>Sign Up</h1>
                    <form method="post" action="admin_register_query.php">
                        <div class="form_row">
                            <label for="username">Username</label>
                            <input type="text"  name="uname" style="margin-left: 10%;" required>
                        </div>
                        <div class="form_row">
                            <label for="password">Password</label>
                            <input type="password" name="pass"  style="margin-left: 10%;" required>
                        </div>
                        <div class="form_row">
                            <label for="confirm-password">Confirm<br>Password</label>
                            <input type="password"  name="cpass" style="margin-left: 10%;" required>
                        </div>
                        <div class="form_row">
                            <label for="email"style="margin-top: 3%;">Email</label>
                            <input type="email"  name="mail" style="margin-left: 20%;" required>
                        </div>
                        <p>Already have an account? <span><a a href="admin_login.php" value='click here'>Log In</a></span></p>
                        <button type="submit"><a href="admin_login.php">Sign Up</a></button>
                    </form>
                </div>
            </div>
        </section>
    </div>
    
</body>
</html>