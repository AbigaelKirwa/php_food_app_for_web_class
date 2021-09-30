<?php
include_once ("connect.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == 'POST'){

    //create table
    $sql_table = "CREATE TABLE `shopping_cart`(
        `Cart_id` INT(6) AUTO_INCREMENT PRIMARY KEY,
        `User_id` VARCHAR(70) NOT NULL,
        `username` VARCHAR(70) NOT NULL,
        `Food_name` VARCHAR(70) NOT NULL,
        `Food_price` INT(50) NOT NULL,
        `Food_quantity` INT(50) NOT NULL,
        `Total_price`INT(50) NOT NULL
    )";

    $user_id= $_SESSION['client_id'];
    $username = $_SESSION['username'];
    $Food_name= $_POST["name"];
    $Food_price= $_POST["price"];
    $Food_quantity= $_POST["Food_quantity"];
    $Total_price = $_POST["price"] * $_POST["Food_quantity"];


    $sql_insert = "INSERT INTO shopping_cart(`User_id`,`username`,`Food_name`, `Food_price`, `Food_quantity`,`Total_price`) VALUES ('$user_id','$username','$Food_name','$Food_price', '$Food_quantity','$Total_price')"; 
    
    if($conn -> query($sql_insert) === TRUE)
    {
        echo '<script>alert("Succesfully added to cart)</script>"';
        header("Location: client_shopping_cart.php");
    }

    else
    {
        echo'<script>alert("Error in storing in database")</script>';
    }

}

?>
