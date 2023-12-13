<?php
@include 'config.php';

$sql = "SELECT * FROM contract_t";

$result = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Notification</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="images/R.png" alt="">
            </div>

        </div>

        <div class="order">

            <h1>All Notification</h1>
            <table>
                <tr>
                    <td>Use Name</td>
                    <td>Email</td>
                    <td>Phone</td>

                    <td>Message</td>
                </tr>
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["phone"] . "</td>";
                    echo "<td>" . $row["message"] . "</td>";

                    echo "</tr>";
                }
                ?>


            </table>

        </div>
    </div>

</body>

</html>