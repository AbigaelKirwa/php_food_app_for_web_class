<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="client_profile_view.css?v=<?php echo time(); ?>">
    <title>Profile view</title>
</head>
<body>
    <div class="container">
    <img class="profile-pic"src="https://res.cloudinary.com/due79afep/image/upload/v1628886637/download_1_g35nzd.png" alt="profile pic">
    <?php
        echo "<div class='html_session'><h1>Welcome " .$_SESSION['username'] ."</h1></div>";
        echo "<h3>Here are your details</h3>";
        echo "<h2>Username: " .$_SESSION['username'] ."</h2> ";
        echo "<h2>Password: " .$_SESSION['password'] ."</h2> ";
    ?>
    </div>
    
</body>
</html>