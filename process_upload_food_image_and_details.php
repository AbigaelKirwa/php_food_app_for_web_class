<?php
require_once("dbconnect.php");
if (isset($_POST['submitImage']))
{
    $file= $_FILES["food-image"];
    $file_path="asset/";

    $original_file_name=$_FILES['food-image']['name'];
    $file_tmp_location=$_FILES['food-image']['tmp_name'];

   if(move_uploaded_file($file_tmp_location, $file_path.$original_file_name)){
       $sql= "INSERT INTO food_menu(Food_name,Image_Path,Price) VALUES('".$_POST["fooditem"]."', '$original_file_name', '".$_POST["price"]."')";
   
    //setData($sql);
    if(setData($sql))
    {
        header("refresh:0; url= admin-view-food-image-and-details.php");
        echo "Record inserted successfully";
    }
    }
}
?>