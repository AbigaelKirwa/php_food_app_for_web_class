<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "food_app_134670");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="client_view_food_menu.css?v=<?php echo time(); ?>">
    <title>Shopping cart</title>
</head>
<body>
<table>

    <?php
    $query = "SELECT * FROM food_menu ORDER BY Id ASC";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result))
    {
        while($row = mysqli_fetch_array($result))
        {
  ?>
    <div>
    <form method="post" action="view_image_client.php?action=add&Id=<?php echo $row["Id"];?>">
    <div class="main_enclosure">
    <img class="grid-item-1" src="asset/<?php echo$row["Image_Path"]; ?>">
    <p class="grid-item-2">$ <?php echo$row["Price"]; ?></p>
    <input type="grid-item-4" name="quantity" id="">
    <button class="grid-item-3">add to cart</button>
    </div>
    </form>
    </div>

  <?php
        }
    }
    ?>
        </table>

</body>
</html>