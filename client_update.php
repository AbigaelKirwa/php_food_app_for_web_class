<?php 
include "connect.php";

if(isset($_POST['update'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];
    $email = $_POST['email'];
    $id = $_POST['id'];


    $sql =  "UPDATE `client_register` SET `username`='$username',`password`='$password',`confirm-password`='$confirm_password',`email`='$email' WHERE `sign_up_id`='$id'";
    $result = $conn -> query($sql);
    if($result == TRUE){
        header("Location: admin-view.php");
        echo '<script>alert("Record succesfully updated")</script>"';
    }else{
        echo "Error:" . $sql . "<br>" . $conn -> error;
    }

    

}

if (isset($_GET['id'])){
    $user_id = $_GET['id'];
    $sql = " SELECT * FROM `client_register`";
    $result = $conn -> query($sql);
    if($result -> num_rows > 0 ){
        while($row = $result -> fetch_assoc()){
            $username = $row['username'];
            $password = $row['password'];
            $confirm_password = $row['confirm-password'];
            $email = $row['email'];
            $id = $row['sign_up_id'];
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
        
        <h2>Update User Details</h2>
        <form action="" method="post">
                <legend>Personal Informartion</legend>
                Username: <br>
                <input type="text" name="username" value="<?php echo $username;?>">
                <br>
                ID number:<br>
                <input type="text" name="id" value="<?php echo $id;?>">
                <br>
                password: <br>
                <input type="text" name="password" value="<?php echo $password;?>">
                <br>
                Confirm password: <br>
                <input type="text" name="confirm-password" value="<?php echo $confirm_password;?>">
                <br>
                Email: <br>
                <input type="email" name="email" value="<?php echo $email;?>">
                <br><br>
                
                <input type="submit" value="update" name="update">
        </form>
    </body>
</html>

    <?php    
     }
     else{
        header('Location:admin-view.php');
    }
}
?>