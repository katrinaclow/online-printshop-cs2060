<!-- Starts session -->
<?php
    session_start();
    // sets session variables if they are previously populated
    if (isset($_SESSION['name']) == True) {
        $name = $_SESSION['name'];
    }
    if (isset($_SESSION['name']) == True) {
        $phone = $_SESSION['phone'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KC Photo Shop</title>
    <link rel="stylesheet" href="css/shopstyle.css">
</head>

<body>
    <!-- Navigation bar -->
    <div class="header">
        <a href="#default" class="logo">KC Photo</a>
        <div class="header-right">
            <a href="index.php">Home</a>
            <a class="active" href="shop.php">Shop</a>
            <a href="contact.php">Contact</a>
        </div>
    </div>

    <h1>Photo Print Shop</h1>
    <h2>Prints Available</h2>
    <!-- Link to order form -->
    <h4><a href="#form">Take me to the order form</a></h4>

    <!-- Photo grid display -->
    <section>
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="grid">
                    <div class="grid-item">
                        <figure>
                            <img src="images/crescent-moon.JPG" alt="Crescent moon at sunset">
                            <figcaption>Crescent Moon</figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure>
                            <img src="images/full-moon.JPG" alt="Full moon rising at dusk">
                            <figcaption>Full Moon</figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure>
                            <img src="images/dune-path.JPG" alt="Sandy path through the dunes">
                            <figcaption>Sandy Path</figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure>
                            <img src="images/frenchriver-wharf.JPG" alt="Wharf with reflections on the water">
                            <figcaption>Wharf Reflections</figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure>
                            <img src="images/newlondon-wharf.JPG" alt="A fishing boat docked in icy water">
                            <figcaption>Fishing Boat</figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure>
                            <img src="images/tryon-lighthouse.JPG" alt="">
                            <figcaption>Lighthouse on the Cliff</figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure>
                            <img src="images/yankee-dunes.JPG" alt="The end of the dunes">
                            <figcaption>Sand Dune Island</figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure>
                            <img src="images/yankee-lighthouse.JPG" alt="Lighthouse beside the beach">
                            <figcaption>Beach Lighthouse</figcaption>
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <h2>Sizes and Pricing</h2>

    <!-- Table for sizes and corresponding prices -->
    <div class="sizes">
        <div class="display">
            <table>
                <thead>
                    <tr>
                        <th>Size</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>6x9</td>
                        <td>$15.00</td>
                    </tr>
                    <tr>
                        <td>8x12</td>
                        <td>$25.00</td>
                    </tr>
                    <tr>
                        <td>10x15</td>
                        <td>$35.00</td>
                    </tr>
                    <tr>
                        <td>12x18</td>
                        <td>$45.00</td>
                    </tr>
                    <tr>
                        <td>14x21</td>
                        <td>$55.00</td>
                    </tr>
                    <tr>
                        <td>16x24</td>
                        <td>$65.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Sizing visual image -->
        <div class="display">
            <img src="images/aspectratio.jpg">
        </div>
    </div>

    <!-- Form for ordering -->
    <div class="form" id="form">
        <form method="post" action=form.php>
            <h2>Order Form</h2>
            <!-- Contact information  -->
            <h4>Contact Information</h4>
            <div>
                <label for="Name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $name ?? ''; ?>">
            </div>
            <div>
                <label for="Phone Number">Phone:</label>
                <input type="text" id="phone" name="phone" placeholder="000-000-0000" value="<?php echo $phone ?? ''; ?>">
            </div>
            <!-- Product selection  -->
            <h4>Product Details</h4>
            <div>
                <label for="prints">Choose a photo:</label><br>
                <select id="title" name="title">
                    <option value="">Select a title:</option>
                    <option value="Crescent Moon">Crescent Moon</option>
                    <option value="Full Moon">Full Moon</option>
                    <option value="Sandy Path">Sandy Path</option>
                    <option value="Wharf Reflections">Wharf Reflections</option>
                    <option value="Fishing Boat">Fishing Boat</option>
                    <option value="Lighthouse on the Cliff">Lighthouse on the Cliff</option>
                    <option value="Sand Dune Island">Sand Dune Island</option>
                    <option value="Beach Lighthouse">Beach Lighthouse</option>
                </select>
            </div>
            <div>
                <label for="size">Choose a print size:</label><br>
                <select id="size" name="size">
                    <option value="">Select a print size:</option>
                    <option value="6x9">6x9</option>
                    <option value="8x12">8x12</option>
                    <option value="10x15">10x15</option>
                    <option value="12x18">12x18</option>
                    <option value="14x21">14x21</option>
                    <option value="16x24">16x24</option>
                </select>
            </div>
            <div><input type="submit" name="submit" value="Purchase"></div>
        </form>
    </div>

</body>

</html>

