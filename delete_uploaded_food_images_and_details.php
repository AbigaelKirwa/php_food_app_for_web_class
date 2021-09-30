<?php
include ("dbconnect.php");
$conn = new mysqli("localhost", "root", "", "food_app_134670");
$sql= "CREATE DATABASE FOOD";
$conn -> query($sql);
if(isset($_GET['id'])){
$query = "delete from food_menu where Id =".$_GET['id'];
$result = mysqli_query($conn, $query);
if($result){
    header("refresh:0; url= admin-view-food-image-and-details.php");
    echo'<script>alert("Record deleted succesfully")</script>';
}
}
?>