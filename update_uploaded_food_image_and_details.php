<?php 
include "dbconnect.php";
$conn = new mysqli("localhost", "root", "", "food_app_134670");

if(isset($_POST['update'])){
    $Food_name = $_POST['Food_name'];
    $Image_Path = $_POST['Image_Path'];
    $Price = $_POST['Price'];
    $id = $_POST['id'];

    $sql =  "UPDATE `food_menu` SET `Food_name`='$Food_name',`Image_Path`='$Image_Path',`Price`='$Price' WHERE `Id`='$id'";
    $result = $conn -> query($sql);
    if($result == TRUE){
        header("Location: admin-view-food-image-and-details.php");
        echo '<script>alert("Record succesfully updated")</script>"';
    }else{
        echo "Error:" . $sql . "<br>" . $conn -> error;
    }

    

}

if (isset($_GET['id'])){
    $user_id = $_GET['id'];
    $sql = " SELECT * FROM `food_menu`";
    $result = $conn -> query($sql);
    if($result -> num_rows > 0 ){
        while($row = $result -> fetch_assoc()){
            $Food_name = $row['Food_name'];
            $Image_Path = $row['Image_Path'];
            $Price = $row['Price'];
            $id = $row['Id'];
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
        
        <h2>Update Food Details</h2>
        <form action="" method="post">
                <legend>Food details</legend>
                ID number:<br>
                <input type="text" name="id" value="<?php echo $id;?>">
                <br>
                Food_name: <br>
                <input type="text" name="Food_name" value="<?php echo $Food_name;?>">
                <br>
                Image_Path: <br>
                <input type="text" name="Image_Path" value="<?php echo $Image_Path;?>">
                <br>
                Price: <br>
                <input type="number" name="Price" value="<?php echo $Price;?>">
                <br><br>
                
                <input type="submit" value="Update" name="update">
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