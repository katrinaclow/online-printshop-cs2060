<!-- Start session  -->
<?php
    // Setting session variables from form data
    session_start();
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['title'] = $_POST['title'];
    $_SESSION['size'] = $_POST['size'];
    //setting price value depending on size of photo chosen
    if (preg_match("/6x9/", $_POST['size'])) {
        $price = "$15.00";
    }
    if (preg_match("/8x12/", $_POST['size'])) {
        $price = "$25.00";
    }
    if (preg_match("/10x15/", $_POST['size'])) {
        $price = "$35.00";
    }
    if (preg_match("/12x18/", $_POST['size'])) {
        $price = "$45.00";
    }
    if (preg_match("/14x21/", $_POST['size'])) {
        $price = "$55.00";
    }
    if (preg_match("/16x24/", $_POST['size'])) {
        $price = "$65.00";
    }
    $_SESSION['price'] = $price;
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
    <!-- Navigation Bar  -->
    <div class="header">
        <a href="#default" class="logo">KC Photo</a>
        <div class="header-right">
            <a href="index.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="contact.php">Contact</a>
        </div>
    </div>
    <!-- Validates all form information, if validated, displays order for confirmation. If not, notifies customer. -->
    <h3>
    <?php
        $msg = $_SESSION['name'] . ", You have selected a " . $_SESSION['size'] . " print of the " . $_SESSION['title'] . " photo. Your total is " . $_SESSION['price'] . ". Confirm below:";
        $str = $_SESSION['title'] . ', ' . $_SESSION['size'];
        if (!strpos(file_get_contents("data/available.txt"), $str) !== false) {
            print("<p class='error'> This size is currently unavailable for this title</p>
            <p>Click the back button to select another</p></body></html>");
        } elseif (!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $_POST["phone"])) {
            print("<p class='error'> Invalid Phone Number</p>
            <p>Please go back and use the structure 000-000-0000 and try again</p></body></html>");
        } elseif (empty($_POST['name'])) {
            print("<p class='error'>Invalid Name</p>
            <p>Please go back and fill out your name</p></body></html>");
        } elseif (empty($_POST['title'])) {
            print("<p class='error'>Invalid Title</p>
            <p>Please go back and select a title</p></body></html>");

        } elseif (empty($_POST['size'])) {
            print("<p class='error'>Invalid Size</p>
            <p>Please go back and choose a print size</p></body></html>");
        }else {
            print($msg);
            ?> 
            <form method="post" action=confirm.php>
            <div><center><input type="submit" name="submit" value="Confirm Purchase"></center></div>
            </form>
    <?php
        }
    ?>
    </h3>

</body>

</html>