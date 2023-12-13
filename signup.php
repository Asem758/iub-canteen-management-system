<?php
@include 'config.php';
if (isset($_POST['submit'])) {
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $fname = mysqli_real_escape_string($con, $_POST['fname']);
  $lname = mysqli_real_escape_string($con, $_POST['lname']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $pass = mysqli_real_escape_string($con, $_POST['pass']);
  $address = mysqli_real_escape_string($con, $_POST['address']);

  $insert = "INSERT INTO users(username,f_name,l_name,email,phone,password,address) VALUES('$username','$fname','$lname','$email','$phone','$pass','$address')";
  mysqli_query($con, $insert);

  echo "<script>alert('Data Inserted successfully');</script>";
  header('location:login.php');
}
?>


<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style3.css">
  <title>SignUp Form</title>

</head>

<body>
  <div class="center">

    <h1>Please Signup Here</h1>
    <form method="post">
      <div class="txt_field">
        <input type="txt" name="username" required>
        <span></span>
        <label>User Name</label>
      </div>
      <div class="txt_field">
        <input type="txt" name="fname" required>
        <span></span>
        <label>First Name</label>
      </div>
      <div class="txt_field">
        <input type="txt" name="lname" required>
        <span></span>
        <label>Last Name</label>
      </div>
      <div class="txt_field">
        <input type="email" name="email" required>
        <span></span>
        <label>Email</label>
      </div>
      <div class="txt_field">
        <input type="txt" name="phone" required>
        <span></span>
        <label>Phone</label>
      </div>
      <div class="txt_field">
        <input type="password" name="pass" required>
        <span></span>
        <label>Password</label>
      </div>
      <div class="txt_field">
        <input type="txt" name="address" required>
        <span></span>
        <label>Address</label>
      </div>
      <input type="submit" name="submit" value="SignUp">
    </form>

  </div>
</body>

</html>