<?php

session_start();

    include_once ("connect.php");

//create database query
$sql_create= "CREATE DATABASE food";

//create table
$sql_table = "CREATE TABLE food_ordered(
    `food_order_id` INT(6) AUTO_INCREMENT PRIMARY KEY,
    `user_id` VARCHAR(70) NOT NULL,
    `username` VARCHAR(70) NOT NULL,
    `city` VARCHAR(70) NOT NULL,
    `address` VARCHAR(70) NOT NULL,
    `food_name` VARCHAR(70) NOT NULL,
    `food_quantity` VARCHAR(50) NOT NULL
)";

$sql_select = "SELECT  * FROM `billing_details` ";
$results = $conn->query($sql_select);
if($results -> num_rows > 0){
    $results = $conn->query($sql_select);

    while($row = $results -> fetch_assoc()){
            $_SESSION["address"] = $row["address"];
            $_SESSION["city"] = $row["city"];
    } 
}


// $sql = "SELECT * FROM billing_details where billing_id = id";
// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

// $_SESSION["address"]= $row['address'];
// $_SESSION["city"]= $row['city'];

    $user_id=$_SESSION["client_id"];
    $username=$_SESSION["username"];
    $address=$_SESSION["address"];
    $city=$_SESSION["city"];
    $food_name= $_SESSION["name"];
    $food_quantity= $_SESSION["quantity"];



    $sql_insert = "INSERT INTO food_ordered(`user_id`, `username`, `city`, `address`,`food_name`,`food_quantity`) VALUES ('$user_id','$username','$city','$address','$food_name', '$food_quantity')"; 
    
    if($conn -> query($sql_insert) === TRUE)
    {
        echo'Successful order!';
        header("Location: client_view_orders.php");
        
    }
    else{
       
        echo'Error';
        
    }


?>