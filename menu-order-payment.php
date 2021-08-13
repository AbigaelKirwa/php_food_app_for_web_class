<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu-order-payment.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://res.cloudinary.com/due79afep/image/upload/v1625403924/Group_42_deioms.png" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php
            echo "<div class='html_session'><h1>Welcome " .$_SESSION['username'] ."</h1></div>";
        ?>
        <section class="section-navigation">
            <div class="navbar-logo">
                <a href="#"><img src="https://res.cloudinary.com/due79afep/image/upload/v1626893519/Group_43_mhz2fm.png" alt="picture"></a>
            </div> 
            <div>
                <div class="navbar-list">
                    <div class="navbar-list-links">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a onClick="parent.location='#section-three'" value='click here'>Menu</a></li>
                            <li><a onClick="parent.location='#section-four'" value='click here'>Order</a></li>
                            <li><a onClick="parent.location='#section-five'" value='click here'>Pay</a></li>
                        </ul>
                    </div>
                    <div class="navbar-list-button">
                        <a href="index.php"><button>Log Out</button></a>
                    </div>
                    <div class="dark-theme-icon">
                        <i class="fa fa-power-off" aria-hidden="true" onclick="mydarkFunction()"></i>
                    </div>
                </div>
            </div>
        </section>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <section class="section-three" id="section-three">
            <div class="section-three-heading">
                <h1>Menu</h1>
            </div>
            <div class="section-three-menu-options">
                <div class="section-three-menu-options-row">
                    <div class="column-one">
                        <div class="column-one-image">
                            <img src="https://res.cloudinary.com/due79afep/image/upload/v1626623319/Group_100_sexiz8.png" alt="img1">
                        </div>
                        <div class="column-one-words">
                            <p>Vegan-Pizza<br>$2.00</p>
                        </div>
                    </div>
                    <div class="column-one">
                        <div class="column-one-image">
                            <img src="https://res.cloudinary.com/due79afep/image/upload/v1626623319/Group_101_fuyoym.png" alt="img2">
                        </div>
                        <div class="column-one-words">
                            <p>Vegan-Drink<br>$2.00</p>
                        </div>
                    </div>
                </div>
                <div class="section-three-menu-options-row">
                    <div class="column-one">
                        <div class="column-one-image">
                            <img src="https://res.cloudinary.com/due79afep/image/upload/v1626623319/Group_107_naux5a.png" alt="img1">
                        </div>
                        <div class="column-one-words">
                            <p>Vegan-Casserole<br>$1.00</p>
                        </div>
                    </div>
                    <div class="column-one">
                        <div class="column-one-image">
                            <img src="https://res.cloudinary.com/due79afep/image/upload/v1626623320/Group_108_itdz3a.png" alt="img2">
                        </div>
                        <div class="column-one-words">
                            <p>Vegetables<br>$4.00</p>
                        </div>
                    </div>
                </div>
                <div class="section-three-menu-options-row">
                    <div class="column-one">
                        <div class="column-one-image">
                            <img src="https://res.cloudinary.com/due79afep/image/upload/v1626623320/Group_123_ak1w03.png" alt="img1">
                        </div>
                        <div class="column-one-words">
                            <p>Vegan-Rice<br>$5.00</p>
                        </div>
                    </div>
                    <div class="column-one">
                        <div class="column-one-image">
                            <img src="https://res.cloudinary.com/due79afep/image/upload/v1626623321/Group_124_cfs2px.png" alt="img2">
                        </div>
                        <div class="column-one-words">
                            <p>Vegan-Dessert<br>$3.00</p>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <section class="section-four" id="section-four">
            <div class="section-four-heading">
                <h1>Order</h1>
            </div>
            <div class="section-tab">
                <form action="">
                    <div class="section-tab-sub-heading">
                        <h4>Order</h4>
                    </div>
                    <div class="part-one">
                        <div class="part-one-row">
                            <div class="part-one-row-words">
                                <p>Order ID</p>
                            </div>
                            <div class="part-one-row-input">
                                <input type="text" style="margin-left: 80%; ">
                            </div>
                        </div>
                    </div>
                    <div class="part-one">
                        <div class="part-one-row">
                            <div class="part-one-row-words">
                                <p>Food Ordered</p>
                            </div>
                            <div class="part-one-row-input">
                                <input type="text" style="margin-left: 49%;">
                            </div>
                        </div>
                    </div>
                    <div class="part-one">
                        <div class="part-one-row">
                            <div class="part-one-row-words">
                                <p>Amount Ordered</p>
                            </div>
                            <div class="part-one-row-input">
                                <input type="text" style="margin-left: 32%;">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </section>
        <section class="section-five" id="section-five">
            <div class="section-four-heading">
                <h1>Payment</h1>
            </div>
            <div class="section-tab" style="padding-bottom: 10%; padding-top: 7%;">
                <form action="">
                    <div class="mySlides fade">
                        <div class="section-tab-sub-heading">
                            <h4>Cash</h4>
                        </div>
                    </div>
                    <div class="mySlides fade">
                        <div class="section-tab-sub-heading">
                            <h4>Mobile money</h4>
                        </div>
                    </div>
                    <div class="mySlides fade">
                        <div class="section-tab-sub-heading">
                            <h4>Credit Card</h4>
                        </div>
                    </div>  
                        <div class="part-one">
                            <div class="part-one-row">
                                <div class="part-one-row-words">
                                    <p>Payment Method</p>
                                </div>
                                <div class="part-one-row-input">
                                    <input type="text" style="margin-left: 27%;">
                            </div>
                        </div>
                        <div class="part-one">
                            <div class="part-one-row">
                                <div class="part-one-row-words">
                                    <p>Order ID</p>
                                </div>
                                <div class="part-one-row-input">
                                    <input type="text" style="margin-left: 78%;">
                                </div>
                            </div>
                        </div>
                        <div class="part-one">
                            <div class="part-one-row">
                                <div class="part-one-row-words">
                                    <p>Payment Amount</p>
                                </div>
                                <div class="part-one-row-input">
                                    <input type="text" style="margin-left: 25%;">
                                </div>
                            </div>
                        </div>
                    </div>   
                </form>
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
        <section class="lower-section-borders">
            <div class="lower-section-border-left">
                <img src="https://res.cloudinary.com/due79afep/image/upload/v1626712485/Group_120_vc0lj8.png" alt="">
            </div>
            <div class="lower-section-border-right">
                <img src="https://res.cloudinary.com/due79afep/image/upload/v1626712485/Group_121_fkvv3x.png" alt="">
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

<script src="main.js"></script>
</body>
</html>