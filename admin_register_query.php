<?php


if($_SERVER["REQUEST_METHOD"] == 'POST'){

    include_once ("connect.php");

//create database query
$sql_create= "CREATE DATABASE food";

//create table
$sql_table = "CREATE TABLE admin_register(
    `sign_up_id` INT(6) AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(70) NOT NULL,
    `password` VARCHAR(50) NOT NULL,
    `confirm-password` VARCHAR(50) NOT NULL,
    `email` VARCHAR(70) NOT NULL
)";

$username= $_POST["uname"];
$password= $_POST["pass"];
$confirm_password= $_POST["cpass"];
$email= $_POST["mail"];

$sql = "select * from admin_register where username = '$username'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);

if ($num == 0){

if($password == $confirm_password){

    $sql_insert = "INSERT INTO admin_register(`username`, `password`, `confirm-password`, `email`) VALUES ('$username','$password', '$confirm_password', '$email')"; 
    
    if($conn -> query($sql_insert) === TRUE)
    {
        echo '<script>alert("Succesful registration <br> <hl> WELCOME</h1>)</script>"';
        header("Location: admin-view.php");
    }
    }else{
        header("refresh:0; url= index.php");
        echo'<script>alert("Passwords did not match. Check to ensure the passwords Match")</script>';
        header("Location: passwordsNotMatching.php");
    }
}
if ($num > 0){
    header("refresh:0; url= index.php");
    echo'<script>alert("Username already taken")</script>';
}

}


?>