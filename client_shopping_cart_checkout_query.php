<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == 'POST'){
include_once ("connect.php");

//create table
$sql_table = "CREATE TABLE food_orders(
    `Order_id` INT(6) AUTO_INCREMENT PRIMARY KEY,
    `User_id` VARCHAR(70) NOT NULL,
    `Username` VARCHAR(70) NOT NULL,
    `Order_time` datetime,
    `Food_name` VARCHAR(50) NOT NULL,
    `Food_price` INT(50) NOT NULL,
    `Food_quantity` INT(50) NOT NULL,
    `Total_price`INT(50) NOT NULL
)";


    $user_id= $_SESSION['client_id'];
    $username= $_SESSION['username'];
    $Food_name = $_POST["name"];
    $Food_price = $_POST["price"];
    $Food_quantity = $_POST["quantity"];
    $Total_price = $_POST["total"];



    $sql_insert = "INSERT INTO food_orders(`User_id`, `Username`, `Order_time`, `Food_name`, `Food_price`, `Food_quantity`, `Total_price`) VALUES ('$user_id','$username', CURRENT_TIMESTAMP, '$Food_name', '$Food_price', '$Food_quantity', '$Total_price')";

    if($conn -> query($sql_insert) === TRUE)
    {
        echo '<script>alert("Succesful purchase <br>")</script>';
        header("Location: client_payment_and_final_order.php");
    }

    else{
        echo("Error description: " . mysqli_error($conn));
    }

}


?>