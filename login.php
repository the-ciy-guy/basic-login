<?php include 'db/server.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User registration system using PHP and MySQL</title>
    <link rel="stylesheet" type="text/css"href="css/style.css">
  </head>
  <body>
    <div class="header">
      <h2>Login</h2>
    </div>

    <form method="POST" action="login.php">
      <!-- display validation errors here -->
      <?php include('errors.php'); ?>
      <div class="input-group">
        <label>Username</label>
        <input type="text" name="username">
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
      </div>
      <div class="input-group">
        <button type="submit" name="login" class="btn">Login</button>
      </div>
      <p>
        Not yet a member? <a href="register.php">Sign up</a>
      </p>
  </body>
</html>
