<?php

// Include your database configuration file
@include 'config.php';

if (isset($_POST['submit'])) {



    $restaurantName = mysqli_real_escape_string($con, $_POST['res']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $openHours = mysqli_real_escape_string($con, $_POST['hours']);
    $closeHours = mysqli_real_escape_string($con, $_POST['chours']);
    $address = mysqli_real_escape_string($con, $_POST['address']);


    $targetDir = "Res_img/";
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);

    // Insert data into the database
    $insert = "INSERT INTO restaurant (title, email, phone, o_hr, c_hr,address, image) VALUES ('$restaurantName', '$email', '$phone', '$openHours', '$closeHours','$address','$targetFile')";
    mysqli_query($con, $insert);



    echo "
     <script>alert('Data inserted successfully');</script>
     ";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Add resturent</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="images/R.png" alt="">
            </div>

        </div>
        <h1>ADD RESTAURANT</h1>
        <div class="form">
            <form action="" method="post" enctype="multipart/form-data">
                <p>Restaurant name</p>
                <input type="text" name="res">
                <p>Email</p>
                <input type="email" name="email"><br>
                <p>Phone</p>
                <input type="text" name="phone"><br>
                <p>Open Hours</p>
                <input type="text" name="hours"><br>
                <p>Close Hours</p>
                <input type="text" name="chours"><br>
                <p>Image</p>
                <input type="file" name="file">
                <p>Address</p>
                <input type="text" name="address"><br>

                <input type="submit" name="submit" value="Submit">

            </form>
        </div>
    </div>

</body>

</html>