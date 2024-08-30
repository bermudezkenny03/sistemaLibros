<?php
include('app/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form in HTML and CSS | Codehal</title>
    <link rel="stylesheet" href="public/css/styleLogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    
<div class="wrapper">
  <img src="public/img/logoLogin.jpeg" class="avatar" alt="Avatar Image">
 <form action="">
<h1>Login</h1>
<div class="input-box">
    <input type="text" placeholder="Username"
    required>
    <i class='bx bxs-user'></i>
</div>
<div class="input-box">
  <input type="password"
  placeholder="password" required>
  <i class='bx bxs-lock-alt'></i>
  </div>
  <div class="remember-forgot">
    <label><input type= "checkbox"> remember me </label>
    <a href="#">forgot password?</a>
  </div>
<button type ="submit" class="btn">Login</button>
<div class="register-link">
  <p> Dont have an account? <a 
  href="register.php">register</a></p>


</div>
</form>

</div>
</body>

</html>