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


if(isset($_POST['cartItem'])) {
    foreach ($_POST['cartItem'] as $cartItemJson) {
        $cartItem = json_decode($cartItemJson, true);

        $selectedItemTitle = mysqli_real_escape_string($con, $cartItem['title']);
        $selectedItemPrice = mysqli_real_escape_string($con, $cartItem['price']);

        $insertQuery = "INSERT INTO users_orders (u_id,title, price) VALUES ('$userID','$selectedItemTitle', '$selectedItemPrice')";
        mysqli_query($con, $insertQuery);

          
    echo "
    <script>alert('successfully submitted');</script>
    ";

    }

    
    echo "
     <script>alert('successfully submitted');</script>
     ";


} else {
    echo "No items were selected.";
}
?>