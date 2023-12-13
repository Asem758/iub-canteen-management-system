<?php
@include 'config.php';

$count_query = "SELECT COUNT(*) as total FROM restaurant";
$result = mysqli_query($con, $count_query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $totalRestaurants = $row['total'];
} else {
    $totalRestaurants = 0; // Handle the error case
}

$count_query1 = "SELECT COUNT(*) as totaluser FROM users";
$result1 = mysqli_query($con, $count_query1);

if ($result1) {
    $row1 = mysqli_fetch_assoc($result1);
    $totalusers = $row1['totaluser'];
} else {
    $totaluser = 0; // Handle the error case
}

$count_query2 = "SELECT COUNT(*) as totaldishes FROM dishes";
$result2 = mysqli_query($con, $count_query2);

if ($result2) {
    $row2 = mysqli_fetch_assoc($result2);
    $totaldishes = $row2['totaldishes'];
} else {
    $totaldishes = 0; // Handle the error case
}

$count_query3 = "SELECT COUNT(*) as totalorders FROM users_orders";
$result3 = mysqli_query($con, $count_query3);

if ($result3) {
    $row3 = mysqli_fetch_assoc($result3);
    $totalorders = $row3['totalorders'];
} else {
    $totalorders = 0; // Handle the error case
}

$count_query4 = "SELECT SUM(price) as totalprice FROM users_orders";
$result4 = mysqli_query($con, $count_query4);

if ($result4) {
    $row4 = mysqli_fetch_assoc($result4);
    $totalprice = $row4['totalprice'];
} else {
    $totalprice = 0; // Handle the error case
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin pannel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="images/R.png" alt="">
            </div>

        </div>
        <div class="articale">
            <div class="content">
                <h2>Admin Dashboard</h2>
                <div class="dash">

                    <a href="dashboard.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a>
                </div>
                <div class="res">

                    <a href="addRestaurant.php"><i class="fa fa-archive f-s-20 color-warning"></i><span>Add Restaurant</span></a>

                </div>
                <div class="res">

                    <a href="addMenu.php"><i class="fa fa-cutlery" aria-hidden="true"></i><span>Add Menu</span></a>

                </div>
                <div class="res">

                    <a href="order.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Orders</span></a>

                </div>
                <div class="res">

                    <a href="notification.php"><i class="fa-regular fa-comment"></i><span>Notification</span></a>

                </div>

            </div>
            <div class="sidebar">



                <div class="dashboard">
                    <div class="media">


                        <div class="media-icon">
                            <span><i class="fa fa-home f-s-40 "></i></span>
                        </div>'
                        <div class="media-txt">
                            <h1><?php echo $totalRestaurants; ?></h1>
                            <p>Restaurant</p>
                        </div>

                    </div>


                    <div class="media">
                        <div class="media-icon">
                            <span><i class="fa fa-users f-s-40"></i></span>
                        </div>
                        <div class="media-txt">
                            <h1><?php echo $totalusers; ?></h1>
                            <p>Users</p>
                        </div>

                    </div>
                    <div class="media">
                        <div class="media-icon">
                            <span><i class="fa fa-cutlery f-s-40" aria-hidden="true"></i></span>
                        </div>
                        <div class="media-txt">
                            <h1><?php echo $totaldishes; ?></h1>
                            <p>Dishes</p>
                        </div>

                    </div>
                    <div class="media">
                        <div class="media-icon">
                            <span><i class="fa fa-shopping-cart f-s-40" aria-hidden="true"></i></span>
                        </div>
                        <div class="media-txt">
                            <h1><?php echo $totalorders; ?></h1>
                            <p>Total Orders</p>
                        </div>

                    </div>

                </div>

                <div class="dashboard">
                    <div class="media">
                        <div class="media-icon">
                            <span><i class="fa fa-spinner f-s-40" aria-hidden="true"></i></span>
                        </div>
                        <div class="media-txt">
                            <h1>4</h1>
                            <p>Processing Orders</p>
                        </div>

                    </div>


                    <div class="media">
                        <div class="media-icon">
                            <span><i class="fa fa-check f-s-40" aria-hidden="true"></i></span>
                        </div>
                        <div class="media-txt">
                            <h1><?php echo $totalorders; ?></h1>
                            <p>Delivered Order</p>
                        </div>

                    </div>
                    <div class="media">
                        <div class="media-icon">
                            <span><i class="fa fa-usd f-s-40" aria-hidden="true"></i></span>
                        </div>
                        <div class="media-txt">
                            <h1><?php echo $totalprice; ?></h1>
                            <p>Total Earning</p>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>

</body>

</html>