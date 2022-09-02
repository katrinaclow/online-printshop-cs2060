<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KC Photo Contact</title>
    <link rel="stylesheet" href="css/shopstyle.css">
    <script src="javascript/shopscript.js"></script>
</head>

<body>
    <!-- Navigation bar -->
    <div class="header">
        <a href="#default" class="logo">KC Photo</a>
        <div class="header-right">
            <a href="index.php">Home</a>
            <a href="shop.php">Shop</a>
            <a class="active" href="contact.php">Contact</a>
        </div>
    </div>

    <h1>Contact Page</h1>
    <h3>Fill out the form below or click <a href="mailto:contact@katrinaclow.com">here</a> to get in contact with me.</h3>

    <!-- Contact form -->
    <div class="form" id="form">
        <form method="post" name="contactform" action="contactform.php">
            <h2>Order Form</h2>
            <label for="client_name">Name:</label><br>
            <input type="text" id="client_name" name="name"><br>
            <label for="client_contact">E-mail:</label><br>
            <input type="text" id="client_contact" name="email"><br>

            <label>Type inquiry here: <br>
                <textarea name="message" rows="6" cols="40">Type your inquiry in this box</textarea><br>
                <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>