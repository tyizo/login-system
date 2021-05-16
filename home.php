<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>Tyizo Blog</title>
    <style>
    .form {
        text-align: center;
        width: 400px;
        margin: 160px auto;
        font-size: 30px;
    }
    .logout{
        margin-top: 20px;
        background-color: red;
    }

    </style>
</head>
<body>

    <?php include_once './header.php';?>
    <div class="form">
        <p>Hey!</p>
        <p>You are now user.</p>
        <br>
        <p><a href="./logout.php" class="logout">Logout</a></p>
    </div>

    <?php include_once './footer.php'; ?>

</body>
</html>
