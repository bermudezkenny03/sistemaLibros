<?php
include('app/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/styleRegister.css">
    <title>Register</title>
</head>
<body>
<div class="login-container">
      <div class="login-info-container">
        <h1 class="title">Register</h1>
        <div class="social-login">
          <div class="social-login-element">
            <img src="public/img/google.svg" alt="google-image" />
            <span>Google</span>
          </div>
        </div>
<p></p>
        <form class="inputs-container">
          <input class="input" type="text" placeholder="USERNAME" />
          <input class="input" type="text" placeholder="EMAIL" />
          <input class="input" type="text" placeholder="PHONE" />
          <input class="input" type="text" placeholder="PASSWORD" />

          <button class="btn">Register</button>
          <div class="register-link">
  <p>!You already have an!   <a 
  href="login.php">Iniciar sección</a></p>
</div>
        </form>
      </div>
      <img class="image-container" src="public/img/logoLogin.jpeg" alt="" />
    </div>
</body>
</html>