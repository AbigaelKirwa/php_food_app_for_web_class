<?php
include ("connect.php");
if(isset($_GET['id'])){
$query = "delete from food_orders where Order_id =".$_GET['id'];
$result = mysqli_query($conn, $query);
if($result){
    header("refresh:0; url= client_view_orders.php");
    echo'<script>alert("Record deleted succesfully")</script>';
}
}
?>