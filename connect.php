<?php
//create a connection
$conn = new mysqli("localhost", "root", "", "food_app_134670");

//check connection
if($conn -> connect_error)
{
    die("Not connected".$conn -> connect_error);
}
//create database query
$sql= "CREATE DATABASE FOOD";
$conn -> query($sql)
// if($conn -> query($sql) === TRUE)
// {
//     echo "Database created ";
// }
// else
// {
//     echo "error in creating database " .$conn -> error;
// }


?>