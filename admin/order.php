<?php
@include 'config.php';

$sql = "SELECT * FROM users_orders
        INNER JOIN users ON users_orders.u_id = users.u_id";
$result = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Orders</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="images/R.png" alt="">
            </div>

        </div>

        <div class="order">

            <h1>All Order</h1>
            <table>
                <tr>
                    <td>User</td>
                    <td>Title</td>
                    <td>Price</td>
                    <td>Address</td>
                    <td>Order Date</td>
                </tr>
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["username"] . "</td>";
                    echo "<td>" . $row["title"] . "</td>";
                    echo "<td>" . $row["price"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "<td>" . $row["date"] . "</td>";
                    echo "</tr>";
                }
                ?>


            </table>

        </div>
    </div>

</body>

</html>