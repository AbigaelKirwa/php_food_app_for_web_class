<?php

session_start();
if($_SERVER["REQUEST_METHOD"] == 'POST'){

    include_once ("connect.php");

//create database query
$sql_create= "CREATE DATABASE food";

//create table
$sql_table = "CREATE TABLE billing_details(
    `billing_id` INT(6) AUTO_INCREMENT PRIMARY KEY,
    `card_id` VARCHAR(70) NOT NULL,
    `user_id` VARCHAR(70) NOT NULL,
    `username` VARCHAR(70) NOT NULL,
    `card_type` VARCHAR(70) NOT NULL,
    `address` VARCHAR(50) NOT NULL,
    `city` VARCHAR(50) NOT NULL
)";


$card_id= $_POST["card_id"];
$user_id=$_SESSION["client_id"];
$username=$_SESSION["username"];
$card_type= $_POST["card_type"];
$address= $_POST["address"];
$city= $_POST["city"];
$food_name= $_SESSION["name"];
$food_quantity= $_SESSION["quantity"];

$sql_insert = "INSERT INTO billing_details(`card_id`, `user_id`, `username`, `card_type`, `address`, `city`) VALUES ('$card_id','$user_id','$username','$card_type','$address', '$city')"; 
    

    
    if($conn -> query($sql_insert) === TRUE)
    {
        header("Location: successful_food_ordered_by_client.php");
        echo '<script>alert("Succesful registration <br> <hl> WELCOME</h1>)</script>"';
        
    }
    else{
       
        echo'error';
        
    }

}

?>