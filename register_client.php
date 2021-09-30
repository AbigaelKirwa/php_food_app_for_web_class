<?php


if($_SERVER["REQUEST_METHOD"] == 'POST'){

    include_once ("connect.php");

//create database query
$sql_create= "CREATE DATABASE food";

//create table
$sql_table = "CREATE TABLE Client_register(
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

$sql = "select * from client_register where username = '$username'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);

if ($num == 0){

if($password == $confirm_password){

    $sql_insert = "INSERT INTO client_register(`username`, `password`, `confirm-password`, `email`) VALUES ('$username','$password','$confirm_password', '$email')"; 
    
    if($conn -> query($sql_insert) === TRUE)
    {
        header("Location: admin-view-registered-clients-and-admins.php");
        echo '<script>alert("Succesful registration <br> <hl> WELCOME</h1>)</script>"';
        
    }
    }else{
       
        echo'Passwords did not match. Check to ensure the passwords Match';
        
    }
}
if ($num > 0){
   
    echo'Username already taken';
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="client_create.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://res.cloudinary.com/due79afep/image/upload/v1625403924/Group_42_deioms.png" type="image/x-icon">
    <title>Create User</title>
</head>
<body>
<h2>Adding another user(client)</h2>
<form action="" method="post">

                <legend>Personal Informartion</legend>
                <p>Username: </p><br>
                <input type="text" name="uname" required>
                <br>
                <p>password: </p><br>
                <input type="password" name="pass" required>
                <br>
                <p>Confirm password: </p><br>
                <input type="password" name="cpass" required>
                <br>
                <p>Email: </p><br>
                <input type="email" name="mail" required>
                <br><br>
                <input type="submit" value="submit" name="submit" >
        </form> 
</body>
</html>
