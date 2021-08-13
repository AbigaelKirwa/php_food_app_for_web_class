<?php
include ("connect.php");
if(isset($_GET['id'])){
$query = "delete from admin_register where sign_up_id =".$_GET['id'];
$result = mysqli_query($conn, $query);
if($result){
    header("refresh:0; url= admin-view.php");
    echo'<script>alert("Record deleted succesfully")</script>';
}
}
?>