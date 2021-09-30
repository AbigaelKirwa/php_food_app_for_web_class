<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_upload_image.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="https://res.cloudinary.com/due79afep/image/upload/v1625403924/Group_42_deioms.png" type="image/x-icon">
    <title>Upload Image</title>
</head>
<body>
    <form action="process_upload_food_image_and_details.php" method = "POST" enctype="multipart/form-data">
        <label for="fooditem">Food Name: </label><br>
        <input type="text" name="fooditem" required="true" placeholder="Food Item Name"><br><br>

        <label for="foodprice">Price</label><br>
        <input type="number" name="price" id="foodprice" required ="true"><br><br>
        
        <label for="foodimage">Image</label><br>
        <input type="file" name="food-image" id="foodimage" required ="true"><br><br>

        <input class="sub_but" type="submit" name="submitImage" value="save">
    </form>
</body>
</html>