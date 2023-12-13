<?php
@include 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    // Perform validation and hashing if necessary

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result); // Fetch user data
        $_SESSION['loggedin'] = true;
        $_SESSION['u_id'] = $user['u_id']; // Store user ID in the session
        header('Location: index.php');
        exit();
    } else {
        $error_message = "Invalid email or password.";
    }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
<div class="center">
    <h1>Login</h1>
    <?php if (isset($error_message)) { ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php } ?>
    <form method="post">
        <div class="txt_field">
            <input type="email" name="email" required>
            <span></span>
            <label>Email</label>
        </div>
        <div class="txt_field">
            <input type="password" name="pass" required>
            <span></span>
            <label>Password</label>
        </div>
        <input type="submit" name="submit" value="Login">
        <div class="signup_link">
            Not a member? <a href="signup.php">Signup</a>
        </div>
    </form>
</div>
</body>
</html>



