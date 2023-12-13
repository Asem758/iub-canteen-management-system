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


if (isset($_GET['id'])) {
    $restaurantId = $_GET['id'];



    $sql1 = "SELECT * FROM restaurant WHERE rs_id = $restaurantId";
    $result1 = mysqli_query($con, $sql1);
}


$sql = "SELECT * FROM dishes ";
$result = mysqli_query($con, $sql);



ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose item</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .cart1 {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    #cartItems {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .cart-item {
        display: flex;
        align-items: center;
        padding: 10px;
        border-bottom: 1px solid #ccc;
    }

    .cart-item-img img {
        max-width: 60px;
        height: auto;
        margin-right: 10px;
    }

    .cart-item-details {
        flex: 1;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    #checkoutButton {
        margin-top: 10px;
    }
</style>

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
        <div class="poster">
            <?php
            while ($row1 = mysqli_fetch_assoc($result1)) {
                echo '<div class="poster1">';
                echo '<img src="' . $row1['image'] . '" alt="Restaurant Image">';
                echo '</div>';
                echo '<div class="poster2">';
                echo '<h3>' . $row1['title'] . '</h3>';
                echo '<p>' . $row1['address'] . '</p>';
                echo '</div>';
            }
            ?>
        </div>

        <div class="addCart">
            <div class="item">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="item1">';
                    echo '<div class="img">';
                    echo '<img src="dishes/' . $row['img'] . '" alt="">';
                    echo '</div>';
                    echo '<p>' . $row['title'] . '</p>';
                    echo '<p>' . $row['price'] . '</p>';
                    echo '<button class="addToCartBtn" data-title="' . $row['title'] . '" data-price="' . $row['price'] . '" data-img="' . $row['img'] . '">Add Cart</button>';
                    echo '</div>';
                }
                ?>
            </div>
            <div class="cart">
                <div class="cart1">
                    <h2>Shopping Cart</h2>
                    <p>Total: <span id="totalPrice">BDT0.00</span></p>
                    <ul id="cartItems"></ul>
                    <?php
                    if (isset($orderSuccessMessage)) {
                        echo "<p style='color: green;'>$orderSuccessMessage</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <script>
            // Get all the "Add Cart" buttons
            const addToCartButtons = document.querySelectorAll('.addToCartBtn');

            // Get the cart items container
            const cartItemsContainer = document.getElementById('cartItems');

            // Get the total price element
            const totalPriceElement = document.getElementById('totalPrice');
            let totalPrice = 0;

            // Create the "Confirm Order" button element
            const checkoutButton = document.createElement('button');
            checkoutButton.id = 'checkoutButton';
            checkoutButton.textContent = 'Confirm Order';

            // Append the "Confirm Order" button after the cart items container
            document.querySelector('.cart').appendChild(checkoutButton);

            // Array to store selected items
            const selectedItems = [];

            // Attach click event listener to the checkout button
            checkoutButton.addEventListener('click', function() {
                // Create a FormData object to send the selected items to the server
                const formData = new FormData();
                selectedItems.forEach(item => {
                    formData.append('cartItem[]', JSON.stringify(item));
                });

                // Create and configure the AJAX request
                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'your_php_oder.php', true);
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        // Handle the response, if needed
                        console.log(xhr.responseText);
                    }
                };

                // Send the request
                xhr.send(formData);

                // Clear the cart items container
                cartItemsContainer.innerHTML = '';

                // Reset the total price
                totalPrice = 0;
                totalPriceElement.textContent = 'BDT0.00';
            });

            // Attach click event listener to each "Add Cart" button
            addToCartButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const title = button.getAttribute('data-title');
                    const price = parseFloat(button.getAttribute('data-price'));
                    const imgSrc = button.getAttribute('data-img');

                    // Create a new cart item element
                    const cartItem = document.createElement('li');
                    cartItem.classList.add('cart-item');
                    cartItem.innerHTML = `
            <div class="cart-item-img">
                <img src="dishes/${imgSrc}" alt="${title}">
            </div>
            <div class="cart-item-details">
                <p>${title}</p>
                <p>BDT${price.toFixed(2)}</p>
                <button class="removeCartItem">Remove</button>
            </div>
        `;

                    // Append the cart item to the cart items container
                    cartItemsContainer.appendChild(cartItem);

                    // Update total price
                    totalPrice += price;
                    totalPriceElement.textContent = `BDT${totalPrice.toFixed(2)}`;

                    // Push the item title and price to the selectedItems array
                    selectedItems.push({
                        title,
                        price
                    });
                });
            });

            // Rest of your existing JavaScript code for removing cart items
            // Event delegation for removing cart items
            cartItemsContainer.addEventListener('click', function(event) {
                if (event.target.classList.contains('removeCartItem')) {
                    const cartItem = event.target.closest('.cart-item');
                    const priceElement = cartItem.querySelector('.cart-item-details p:nth-child(2)');
                    const itemPrice = parseFloat(priceElement.textContent.slice(1));

                    // Remove the cart item from the container
                    cartItem.remove();

                    // Update total price
                    totalPrice -= itemPrice;
                    totalPriceElement.textContent = `BDT${totalPrice.toFixed(2)}`;
                }
            });
        </script>
        <div class="footer">
            <p>&copy;IubCanteenManagement</p>
        </div>




    </div>


    <script src="script.js"></script>
</body>

</html>