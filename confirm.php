<!-- Setting session variables acquired from the form -->
<?php
    session_start();
    $name = $_SESSION['name'];
    $phone = $_SESSION['phone'];
    $title = $_SESSION['title'];
    $size = $_SESSION['size'];
    $price = $_SESSION['price'];
?>

<!-- Getting current date  -->
<?php
    $mydate = getdate(date("U"));
    $date = "$mydate[mday]/$mydate[month]/$mydate[year]";
?>

<!-- Writing order information data to "orders" file -->
<?php
    $myfile = fopen("data/orders.txt", "a");
    $txt = "$date, $name, $phone, $title, $size, $price\n";
    fwrite($myfile, $txt);
    fclose($myfile);
?>

<!-- Writing sold product information data to "sold" file  -->
<?php
    $myfile = fopen("data/sold.txt", "a");
    $txt = "$date, $title, $size\n";
    fwrite($myfile, $txt);
    fclose($myfile);
?>

<!-- Removing product from "inventory" file -->
<?php
    $pattern = $title . ', ' . $size;
    $contents = file_get_contents("data/available.txt");
    $contents = preg_replace("/$pattern/", '', $contents, 1);
    file_put_contents("data/available.txt", $contents);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Prints Online</title>
    <link rel="stylesheet" href="css/shopstyle.css">
    <script src="javascript/shopscript.js"></script>
</head>

<body>
    <!-- Navigation bar  -->
    <div class="header">
        <a href="#default" class="logo">KC Photo</a>
        <div class="header-right">
            <a href="index.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="contact.php">Contact</a>
        </div>
    </div>
    <!-- Order information  -->
    <p> <?php print("Thank you $name, You have purchased a $size print of the $title photo. Your total is $price."); ?>
    <!-- Return to shopping  -->
    <p>Take me back to the <a href="shop.php">shop</a></p>
    <!-- Finish shopping, clear data  -->
    <p>I'm finished, clear my <a href="clear.php">data</a></p>
</body>

</html>