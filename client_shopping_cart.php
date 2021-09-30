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
</head>
<body>
<div class="container">
     <?php
          echo "<div class='html_session'><h1>Welcome " .$_SESSION['username'] ."</h1></div>";
     ?>
     <h2>Shopping Cart</h2>
     <table>
          <tr>
               <th>Food Name</th>
               <th>Food Price</th>
               <th>Food Quantity</th>
               <th>Total Price</th>
               <th>Actions</th>
          </tr>
          <tbody method="post" action="client_shopping_cart_checkout_query.php">
                <?php
                    include("connect.php");
                    $sql_select = "SELECT  * FROM `shopping_Cart` ";
                    $results = $conn->query($sql_select);
                    if($results -> num_rows > 0){
                    $results = $conn->query($sql_select);

                    
                    while($row = $results -> fetch_assoc()){
                        if($row['username']==$_SESSION['username']){
                        ?>
                        <form method="post" action="client_shopping_cart_checkout_query.php">
                        <input type="hidden" name="name" value="<?php echo $row["Food_name"]; ?>" /> 
                        <input type="hidden" name="price" value="<?php echo $row["Food_price"]; ?>" /> 
                        <input type="hidden" name="quantity" value="<?php echo $row["Food_quantity"]; ?>" /> 
                        <input type="hidden" name="total" value="<?php echo $row["Total_price"]; ?>" />
                        <tr>
                            <td name ="name" value="<?php $row['Food_name'];?>"><?php echo $row['Food_name']; ?></td>
                            <td name ="price" value="<?php $row['Food_price'];?>">$<?php echo $row['Food_price']; ?></td>
                            <td name ="quantity" value="<?php $row['Food_quantity'];?>"><?php echo $row['Food_quantity']; ?></td>
                            <td name ="price" value="<?php $row['Total_price'];?>">$<?php echo $row['Total_price']; ?></td>
                            <td class="action"><a name="delete" href="client_shopping_cart_delete.php?id=<?php echo $row['Cart_id']; ?>">DELETE</a>
                            <input class="checkout_input" type="submit" value="CHECK OUT" href="client_shopping_cart_checkout.php?id=<?php echo $row['Cart_id']; ?>"></input></td>                   
                        <?php 
                            $_SESSION["name"] = $row["Food_name"];
                            $_SESSION["price"] = $row["Food_price"];
                            $_SESSION["quantity"] = $row["Food_quantity"];
                            $_SESSION["total"] = $row["Total_price"];
                        ?>
                        </tr>
                        </form>
                        <?php
                    }
                } 
                    }
                ?>
                </tbody>
        </table>
        <a type="submit" class="checkout_style" name="check-out" href="menu-order-payment.php">CONTINUE SHOPPING</a>
        <a type="submit" class="checkout_style" name="check-out" href="client_view_orders.php">ORDERS</a>
    </div>
</body>
</html>