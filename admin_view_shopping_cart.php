<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin-view.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://res.cloudinary.com/due79afep/image/upload/v1625403924/Group_42_deioms.png" type="image/x-icon">
    <title>Vegan Shop | Admin Page</title>
</head>
<body>
    <div class="container" style="height:100vh">
        <div class="container-heading">
            <h1>Admin View</h1>
        </div>
        <div class="table-one">
            <div class="table-one-heading">
                <h1>Client Order Credentials</h1>
            </div>
            <table>
            <tr>
                    <th>Username</th>
                    <th>Food Name</th>
                    <th>Food Price</th>
                    <th>Food Quantity</th>
                    <th>Total Price</th>
                    <th>Actions</th>
            </tr>
            <tbody>
                    <?php
                        include("connect.php");
                        $sql_select = "SELECT  * FROM `shopping_cart`";
                        $results = $conn->query($sql_select);
                        if($results -> num_rows > 0){
                        $results = $conn->query($sql_select); 
                        while($row = $results -> fetch_assoc()){
                            ?>
                           <tr>
                               <td><?php echo $row['username']; ?></td>
                               <td><?php echo $row['Food_name']; ?></td>
                               <td><?php echo $row['Food_price']; ?></td>
                               <td><?php echo $row['Food_quantity']; ?></td>
                               <td><?php echo $row['Total_price']; ?></td>
                               <td><a name="delete" href="admin_shopping_cart_delete.php?id=<?php echo $row['Cart_id']; ?>">DELETE</a></td>
                           </tr>
                           <?php
                        } 
                     }
                    ?>
                </tbody>
            </table>
            </div>
        <footer>
            <p><a href="admin-landing-page.php">Back</a></p>
        </footer>
        

    </div>
    
</body>

</html>