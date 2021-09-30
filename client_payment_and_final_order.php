<?php
session_start();
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
    <title>Payment Details</title>
</head>
<body>
        
        <h2> User Billing Details</h2>
        <form action="cutomer_payment_details_process.php" method="post">
                <legend>Personal Informartion</legend>
                Bank Card Id: <br>
                <input type="text" name="card_id" value="">
                <br>
                Bank Card type:<br>
                <input type="text" name="card_type" value="">
                <br>
                Address: <br>
                <input type="text" name="address" value="">
                <br>
                City: <br>
                <input type="text" name="city" value="">
                <br>
                
                <input type="submit" value="Final Order" name="final_order" style="margin-top:6%">
        </form>
    </body>
</html>
