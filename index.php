<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="color-scheme" content="dark light"> -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://res.cloudinary.com/due79afep/image/upload/v1625403924/Group_42_deioms.png" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Vegan Shop | Home Page</title>
</head>
<body data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="0" data-new-gr-c-s-check-loaded="14.1007.0" data-gr-ext-installed="">
    <div class="container">
        <section class="section-one">
            <div class="navbar-vector">
                <img src="https://res.cloudinary.com/due79afep/image/upload/v1626939617/Path_6_jgnq5m.png" alt="picture">
            </div>
            <div class="navbar">   
                <div class="navbar-logo">
                    <a href="#"><img src="https://res.cloudinary.com/due79afep/image/upload/v1625404461/Group_43_lksb05.png" alt="picture"></a>
                </div> 
                <div>
                    <div class="navbar-list">
                        <div class="navbar-list-links">
                            <ul>
                                <li><a onClick="parent.location='#section-one-main'" value='click here'></a>Home</a></li>
                                <li><a onClick="parent.location='#section-two'" value='click here'>About</a></li>
                                <!-- <li><a onClick="parent.location='#section-three'" value='click here'>Menu</a></li> -->
                                <li><a onClick="parent.location='#footer'" value='click here'>Contact</a></li>
                            </ul>
                        </div>
                        <div class="navbar-list-button">
                            <a><button onClick="parent.location='#login'" value='click here'>Log In</button></a>
                        </div>
                        <div class="dark-theme-icon">
                            <i class="fa fa-power-off" aria-hidden="true" onclick="mydarkFunction()"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-one-main" id="section-one-main">
            <div class="section-one-main-image">
                <img src="https://res.cloudinary.com/due79afep/image/upload/v1626764240/Group_13_w7pcyf.png" alt="picture">
            </div>
            <div v class="section-one-main-words">
                <h1><b>Vegan Shop</b></h1>
                <h6>Food <span style="color: #8A3D6E;">delivery</span> at your<br>door step</h6>
                <p>V-shop is sure to bring you delicious<br>vegan food at affordable rates.</p>
                <a><button onClick="parent.location='#login'" value='click here'>Order Now!</button></a>
                <a><button style="padding-right: 10%; padding-left: 10%;" onClick="parent.location='#signup'" value='click here'>Sign Up</button></a>
            </div>
            </div>
        </section>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <section class="section-two" id="section-two">
            <h1>Go Greener - Go Vegan</h1>
            <p style="text-align: center;">Vegan food has been shown to have great impact on your metabolism as well as<br>your overall health. Shop vegan today.</p>
            <div class="section-two-pictures">
                <div class="section-two-pictures-image">
                    <img src="https://res.cloudinary.com/due79afep/image/upload/v1625410956/pexels-cottonbro-3338497_gke2rs.png" alt="image">
                </div>
                <div class="section-two-pictures-image">
                    <img src="https://res.cloudinary.com/due79afep/image/upload/v1625410957/pexels-daria-shevtsova-4117550_b0c9sd.png" alt="image">
                </div>
                <div class="section-two-pictures-image">
                    <img src="https://res.cloudinary.com/due79afep/image/upload/v1625410957/pexels-eva-elijas-6824789_x8l71u.png" alt="image">
                </div>
            </div>
            <div class="section-two-pictures-explanation">
                <div class="section-two-pictures-explanation-words" id="explanation-1">
                    <p>Customer<br><span class="green-color-section-two"><b>Satisfaction</b></span></p>
                </div>
                <div class="section-two-pictures-explanation-words" id="explanation-2">
                    <p>Quality<br><span class="green-color-section-two"><b>Standardization</b></span></p>
                </div>
                <div class="section-two-pictures-explanation-words" id="explanation-3">
                    <p>Certified<br><span class="green-color-section-two"><b>Vendors</b></span></p>
                </div>
            </div>
            <div class="section-two-pictures-explanation-2">
                <div class="section-two-pictures-explanation-words" id="explanation-4" style="padding-left: 7%">
                    <p>Our customers are always satisfied</p>
                </div>
                <div class="section-two-pictures-explanation-words" id="explanation-5"  style="padding-left: 9%;">
                    <p>We only use healthy options for you</p>
                </div>
                <div class="section-two-pictures-explanation-words" id="explanation-6" style="padding-left: 7%;">
                    <p>Certified by the Health Commission</p>
                </div>
            </div>
        </section>
        <section class="login-and-signup">
            <div class="login">
                <div class="login-first-bar-picture">
                    <img src="https://res.cloudinary.com/due79afep/image/upload/v1626334887/Group_80_rlspev.png" alt="image">
                </div>
                <div class="login-vector-one">
                    <img src="https://res.cloudinary.com/due79afep/image/upload/v1626334639/Path_15_hfguxr.png" alt="image">
                </div>
                <div class="login-main">
                    <div class="login-main-pic">
                        <img src="https://res.cloudinary.com/due79afep/image/upload/v1626029118/Group_63_h70cru.png" alt="image">
                    </div>
                    <div class="login-main-words" id="login">
                        <h1>Log In</h1>
                        <form method="post" action="client_log_in_query.php" >

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
                            <p>Dont have an account? <span><a onClick="parent.location='#signup'" value='click here'>Sign Up</a></span></p>
                            <p>Are you an admin? <span><a href="admin_login.php" value='click here'>Log In here</a></span></p>
                            <button type="submit">Log In</button>
                        </form>
                    </div>
                </div>
                <div class="login-vector-2">
                    <img src="https://res.cloudinary.com/due79afep/image/upload/v1626334639/Path_21_xshdmu.png" alt="image">
                </div>
            </div>
            <div class="signup"  id="signup">
                <div class="sign-up-main-words">
                    <h1>Sign Up</h1>
                    <form method="post" action="client_register_query.php">
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
                            <input type="email"  name="mail" style="margin-left: 17%;" required>
                        </div>
                        <p>Already have an account? <span><a onClick="parent.location='#login'" value='click here'>Log In</a></span></p>
                        <button type="submit">Sign Up</button>
                    </form>
                </div>
                <div class="sign-up-main-pic">
                    <img src="https://res.cloudinary.com/due79afep/image/upload/v1626029116/Group_64_mblezv.png" alt="image">
                </div>
            </div>
            <div class="login-vector-3">
                <img src="https://res.cloudinary.com/due79afep/image/upload/v1626334639/Path_19_c0bl8k.png" alt="image">
            </div>
            <div class="sign-up-first-bar-picture">
                <img src="https://res.cloudinary.com/due79afep/image/upload/v1626338408/Group_82_bfu7ls.png" alt="image">
            </div>
        </section>
        <section class="section-six">
            <h1>Follow us on our<br>social media pages</h1>
            <div class="section-six-icons">
                <div class="circle1">
                    <a href="#"><i id="fafaicon" class="fa fa-facebook" aria-hidden="true"></i></a>
                </div>
                <div class="circle2">
                    <a href="#"><i id="fafaicon" class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
                <div class="circle2">
                    <a href="#"><i id="fafaicon" class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
        </section>
        <footer id="footer">
            <div class="footer-copyright">
                <p>© Copyright Kirwa Codes</p>
            </div>
            <div class="footer-links">
                <ul>
                    <li><a href="#"><b>Updates</b></a></li>
                    <li><a href="#">Schedule</a></li>
                    <li><a href="#">Launches</a></li>
                    <li><a href="#">Announcements</a></li>
                </ul>
                <ul>
                    <li style="padding: 15%;"><a href="#"><b>Offers</b></a></li>
                    <li style="padding: 15%;"><a href="#">Newsletter</a></li>
                    <li style="padding: 15%;"><a href="#">Coupons</a></li>
                    <li style="padding: 15%;"><a href="#">Free stuff</a></li>
                </ul>
                <ul>
                    <li style="padding: 30%;"><a href="#"><b>Links</b></a></li>
                    <li style="padding: 30%;"><a href="#">Blogs</a></li>
                    <li style="padding: 30%;"><a href="#">Tools</a></li>
                    <li style="padding: 30%;"><a href="#">Tips</a></li>
                </ul>
                <ul>
                    <li style="padding: 20%;"><a href="#"><b>Views</b></a></li>
                    <li style="margin-top: 20%;"><a href="admin_login.php">Admin</a></li>
                    <li style="margin-top: 20%;"><a href="admin_login.php">Vendor</a></li>
                </ul>
            </div>
        </footer>
    </div>
    
    <!--AOS-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- main script -->
    <script src="main.js"></script>
</body>
</html>