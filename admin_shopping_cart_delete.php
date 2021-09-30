<?php
include ("connect.php");
if(isset($_GET['id'])){
$query = "delete from shopping_cart where Cart_id =".$_GET['id'];
$result = mysqli_query($conn, $query);
if($result){
    header("refresh:0; url= admin_view_shopping_cart.php");
    echo'<script>alert("Record deleted succesfully")</script>';
}
}
?>