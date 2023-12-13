<?php
@include 'config.php';
@include 'authentication_functions.php';
session_start();
if (!isUserLoggedIn()) {

    header('Location:login.php');
    exit();
}


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    $userID = $_SESSION['u_id'];
} else {
}



if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $message = mysqli_real_escape_string($con, $_POST['message']);


    $insert = "INSERT INTO contract_t (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    if (mysqli_query($con, $insert)) {
        echo "<script>alert('Successfully submitted');</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}




$sql = "SELECT * FROM dishes LIMIT 6";
$result = mysqli_query($con, $sql);

$sql1 = "SELECT * FROM restaurant";
$result1 = mysqli_query($con, $sql1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Iub cafe</title>

</head>

<body>
    <div class="container">
        <div class="header">

            <div class="logo">
                <img src="images/R.png" alt="">
            </div>
            <div class="nav">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="restaurant.php">Restaurant</a></li>
                    <li><a href="#contract">Contract Us</a></li>
                    <li><a href="logout.php">LogOut</a></li>

                </ul>

            </div>
        </div>
        <div class="home">
            <img src="images/img/canteen-iub.png" alt="">
            <div class="overlay">
                <p>No BREAK MEAL....!</p>
                <ul>

                </ul>
            </div>
        </div>

        <div class="about" id="about">
            <h1>About Us</h1>

            <div class="content1">

                <p>Welcome to IUB Online Food Ordering Platform 'IUB cafe'!<br>
                    At IUB, we understand the importance of a well-balanced student life, and that includes enjoying delicious meals from a variety of local restaurants. Our Online Food Ordering System is designed with the student community in mind, providing a convenient and seamless way to satisfy your cravings without leaving the comfort of your campus.

                    <b>Our Mission</b>
                    Our mission is to enhance the overall university experience by connecting students with the vibrant culinary scene around IUBS. We aim to create a platform that not only simplifies the food ordering process but also fosters a sense of community and exploration through diverse gastronomic experiences.

                    Why Choose IUB Online Food Ordering ?
                    1. Variety at Your Fingertips:Explore a diverse range of restaurants and cuisines right from your computer or mobile device. We've handpicked a selection of local eateries to cater to your every taste and preference.

                    2. Convenience Redefined:Skip the long lines and order your favorite meals with just a few clicks. Our user-friendly interface ensures a hassle-free ordering experience, allowing you to focus on what matters most—your studies and social life.

                    3. Supporting Local Businesses: By choosing IUB Online Food Ordering, you're not just ordering food; you're supporting local businesses and contributing to the vibrancy of our community.

                    <b>How It Works ?</b>
                    1. Browse Restaurants: Explore the diverse range of restaurants available on our platform.

                    2. Place Your Order: Select your desired items and place your order effortlessly.

                    3. Enjoy Your Meal: Sit back, relax, and wait for your delicious meal to be delivered to your doorstep or ready for pickup.

                    <b>Us on the Culinary Journey</b>

                    Embark on a culinary journey with IUB Online Food Ordering. Whether you're a food enthusiast, a busy student, or someone who simply loves the convenience of online ordering, we invite you to discover the flavors that [Your University] has to offer.

                    Thank you for choosing us to be your go-to food ordering platform. Your satisfaction is our priority, and we're here to make your dining experience as enjoyable and convenient as possible.

                    Happy ordering!

                </p><br>

            </div>
            <div class="sidebar">
                <img src="images/about_us.jpg" alt="">

            </div>
        </div>

        <div class="menu" id="menu">
            <div class="heading">
                <h1>Popular Dishes of the Month</h1>
                <p>Easiest way to order your favourite food among these top dishes</p>

            </div>
            <div class="items">
                <?php

                while ($row = mysqli_fetch_assoc($result)) {

                    echo '<div class="menu1">';
                    echo '<div class="des">';
                    echo '<img src="dishes/' . $row['img'] . '" alt="">';
                    echo '<p>' . $row['slogan'] . '</p>';
                    echo '<p style="font-size: 26px;">' .  $row['price'] . '</p>';
                    echo '<button>click to order</button>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>

        </div>

        <div class="restaurant">
            <div class="txt2">
                <div class="logo">
                    <h1>Featured Restaurants</h1>

                </div>
                <div class="nav">
                    <ul>
                        <li><a href="" style="color: black;">All</a></li>
                        <li><a href="" style="color: black;">Continental</a></li>
                        <li><a href="" style="color: black;">Italian</a></li>
                        <li><a href="" style="color: black;">Chinese</a></li>
                        <li><a href="" style="color: black;">American</a></li>
                    </ul>

                </div>

            </div>
            <div class="list">
                <?php
                while ($row1 = mysqli_fetch_assoc($result1)) {
                    echo '<div class="res">';
                    echo '<div class="pic">';
                    echo '<img src="' . $row1['image'] . '" alt="Restaurant Image">';
                    echo '</div>';
                    echo '<div class="info">';
                    echo '<p>' . $row1['title'] . '</p>';
                    echo '<p>' . $row1['address'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>




        </div>

        <div class="contract" id="contract">
            <div class="content3">
                <h1>Contract Us</h1>
                <form action="" method="post">
                    Name <input type="text" name="name"><br><br>
                    Email <input type="email" name="email"><br><br>
                    Phone <input type="number" name="phone"><br><br>
                    Message <textarea name="message" rows="5" cols="30"></textarea>
                    <br><br>
                    <input type="submit" value="submit" name="submit">
                </form>
            </div>
        </div>

        <div class="footer">
            <p>&copy;IubCanteenManagement</p>
        </div>

    </div>

    </div>
</body>

</html>