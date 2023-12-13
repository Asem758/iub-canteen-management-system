<?php
@include 'config.php';
session_start();
// Check if the user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    $userID = $_SESSION['u_id'];

    // Now you can use $userID as the user's ID for your purposes on this page
} else {
    // Redirect the user to the login page or show an appropriate message
}

$sql = "SELECT * FROM restaurant";
$result = mysqli_query($con, $sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="container">
        <div class="header">

            <div class="logo">
                <img src="images/R.png" alt="">
            </div>
            <div class="nav">
                <ul>
                    <li><a href="index.php">Home</a></li>

                    <li><a href="restaurant.php">Restaurant</a></li>


                    <li><a href="logout.php">LogOut</a></li>

                </ul>

            </div>
        </div>
        <div class="articale">
            <div class="heading">
                <span class="dot">
                    <h4>1</h4>
                </span>
                <span>Choose Restaurant</span>

                <span class="dot1">
                    <h4>2</h4>
                </span>
                <span>Pick Your favorite food</span>

                <span class="dot2">
                    <h4>3</h4>
                </span>
                <span>Order and Pay</span>
            </div>
        </div>
        <div class="res">
            <div class="res1">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="name">';
                    echo '<div class="nameImg">';
                    echo '<img src="' . $row['image'] . '" alt="Restaurant Image">';
                    echo '</div>';
                    echo  '<div class="nameTxt">';
                    echo '<p>' . $row['title'] . '</p>';
                    echo '<p>' . $row['address'] . '</p>';
                    echo ' </div>';

                    echo '</div>';
                    echo '<div class="but">';
                    echo '<a href="restaurant1.php?id=' . $row['rs_id'] . '"><button>VIEW</button></a>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
        <div class="footer">
            <p>&copy;IubCanteenManagement</p>
        </div>



    </div>

</body>

</html>