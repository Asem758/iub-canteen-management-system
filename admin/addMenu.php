<?php
// Include your database configuration file
@include 'config.php';

if (isset($_POST['submit'])) {



    $dish = mysqli_real_escape_string($con, $_POST['dish']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $restaurantId = mysqli_real_escape_string($con, $_POST['add_restaurant']);

    // Process and save the uploaded image
    $targetDir = "dishes/"; // Directory where you want to store uploaded images
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);

    // Insert data into the database
    $insert = "INSERT INTO dishes (rs_id, title, slogan, price, img) VALUES (' $restaurantId', '$dish', '$description', '$price', '$targetFile')";
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
    <title>Add menu</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="images/R.png" alt="">
            </div>

        </div>
        <h1>ADD MENU</h1>
        <div class="form">
            <form action="" method="post" enctype="multipart/form-data">
                <p>Dish Name</p>
                <input type="text" name="dish">

                <p>Description</p>
                <input type="text" name="description"><br>
                <p>Price</p>
                <input type="text" name="price"><br>

                <p>Image</p>
                <input type="file" name="file">
                <p>Select restaurant</p>
                <select name="add_restaurant" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>

                <input type="submit" name="submit" value="Submit">

            </form>
        </div>
    </div>

</body>

</html>