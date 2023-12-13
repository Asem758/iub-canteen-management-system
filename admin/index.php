<?php
@include 'config.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $query = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        session_start();
        $user = mysqli_fetch_assoc($result);
        $_SESSION['adm_id'] = $user['adm_id'];
        header("Location: dashboard.php");
        exit();
    } else {
        $login_error = "Invalid email or password"; // Corrected variable name
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
    <?php if (isset($login_error)) { ?> 
        <p style="color: red;"><?php echo $login_error; ?></p>
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
       
    </form>
</div>
</body>
</html>
