<?php
   include("connect.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($conn,$_POST['puname']);
      $password = mysqli_real_escape_string($conn,$_POST['ppass']); 
      
      $sql = "SELECT * FROM admin_register WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) 
      {
        
         header("refresh:0; url= admin-view.php");
         echo'<script>alert("Welcome back")</script>';
      }
      else 
      {
         header("refresh:0; url= index.php");
         echo'<script>alert("Incorrect credentials")</script>';
         header("location: incorrectCredentials.php");
      }
   }
?>