<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Prints Online</title>
    <link rel="stylesheet" href="css/shopstyle.css">

</head>

<body>
    <!-- Navigation Bar  -->
    <div class="header">
        <a href="#default" class="logo">KC Photo</a>
        <div class="header-right">
            <a class="active" href="index.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="contact.php">Contact</a>
        </div>
    </div>

    <div style="padding-left:16px">
        <h1>Welcome to KC Photo</h1>
        <h2>Purchase Prints Online!</h2>
    </div>
    <!-- Photo slideshow  -->
    <div class="slideshow" style="max-width:800px">
        <img class="mySlides" src="images/crescent-moon.JPG" style="width:100%">
        <img class="mySlides" src="images/dune-path.JPG" style="width:100%">
        <img class="mySlides" src="images/frenchriver-wharf.JPG" style="width:100%">
        <img class="mySlides" src="images/full-moon.JPG" style="width:100%">
        <img class="mySlides" src="images/newlondon-wharf.JPG" style="width:100%">
        <img class="mySlides" src="images/tryon-lighthouse.JPG" style="width:100%">
        <img class="mySlides" src="images/yankee-dunes.JPG" style="width:100%">
        <img class="mySlides" src="images/yankee-lighthouse.JPG" style="width:100%">
    </div>
    <script src="javascript/shopscript.js"></script>
    <h2>Enter the <a href="shop.php">shop</a> to see print options.</h2>
    <p>Here you can order prints of photos in a variety of sizes.</p>
</body>

</html>