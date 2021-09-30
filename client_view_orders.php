<?php
session_start();
include_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="client_shopping_cart.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="https://res.cloudinary.com/due79afep/image/upload/v1625403924/Group_42_deioms.png" type="image/x-icon">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    p
    {
        margin-top:3%;
        margin-left:5%;
        color:white;
        font-size:20px;
    }
    p a
    {
        text-decoration:underline;
        font-size:25px;
    }
</style>
</head>
<body>
<div class="container">
     <?php
          echo "<div class='html_session'><h1>Welcome " .$_SESSION['username'] ."</h1></div>";
     ?>
     <h2>Successful Orders</h2>
     <table>
          <tr>
               <th>Food Name</th>
               <th>Food Quantity</th>
               <th>Address</th>
               <th>City</th>
          </tr>
          <tbody method="post" action="client_shopping_cart_checkout_query.php">
                <?php
                    include("connect.php");
                    $sql_select = "SELECT  * FROM `food_ordered` ";
                    $results = $conn->query($sql_select);
                    if($results -> num_rows > 0){
                    $results = $conn->query($sql_select);

                    
                    while($row = $results -> fetch_assoc()){
                        if($row['username']==$_SESSION['username']){
                        ?>
                        <tr>
                            <td name ="fname"><?php echo $row['food_name']; ?></td>
                            <td name ="fquantity"><?php echo $row['food_quantity']; ?></td>
                            <td name ="fprice"><?php echo $row['address']; ?></td>
                            <td name ="tprice"><?php echo $row['city']; ?></td> 
                        </tr>
                        <?php
                    }
                } 
                    }
                ?>
                </tbody>
        </table>
        <a type="submit" class="checkout_style" name="check-out" href="menu-order-payment.php">CONTINUE SHOPPING</a>
    </div>
</body>
</html>