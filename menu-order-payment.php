<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "food_app_134670");
?>
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
                            <li><a onClick="parent.location='client_profile_view.php'" value='click here'>Profile</a></li>
                            <li><a onClick="parent.location='client_shopping_cart.php'" value='click here'>Cart</a></li>
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
                        <?php
                            $query = "SELECT * FROM food_menu ORDER BY Id ASC";
                            $result = mysqli_query($connect, $query);
                            if(mysqli_num_rows($result))
                            {
                                while($row = mysqli_fetch_array($result))
                                {
                        ?>
                        
                        <form method="post" action="client_shopping_cart_process.php">
                            <div class="column-one-image">
                                <img class="grid-item-1" src="asset/<?php echo$row["Image_Path"]; ?>">
                                <p name="Food_name"><b><?php echo$row["Food_name"]; ?></b></p>
                            </div>
                            <div class="column-one-words">
                                <p name="Food_price" class="price">$<?php echo$row["Price"];?></p></td><br>
                                <input type="hidden" name="name" value="<?php echo $row["Food_name"]; ?>" />  
                                <input type="hidden" name="price" value="<?php echo $row["Price"]; ?>" /> 
                                <p>Quantity</td></p>
                                <input name="Food_quantity" type="number" max="10" min="1"></input></td>
                                <a href="client_shopping_cart.php"><button type="submit" name="add_to_cart" class="add_to_cart">add to cart</button></a></td>
                            </div>
                        </form>
                      
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
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

<script src="main.js"></script>
</body>
</html>