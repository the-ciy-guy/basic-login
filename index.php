<!DOCTYPE html>
<?php include 'db/server.php';

  // if user is not logged in, they cannot access this page
  if(empty($_SESSION['username'])){
    header('location: login.php');
  }
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>User registration system using PHP and MySQL</title>
    <link rel="stylesheet" type="text/css"href="css/style.css">
  </head>
  <body>
    <div class="header">
      <h2>Home page</h2>
    </div>

    <div class="content">
      <?php if (isset($_SESSION['success'])): ?>
        <div class="error success">
          <h3>
            <?php echo $_SESSION['success'];
                  unset($_SESSION['success']);
            ?>
          </h3>
        </div>
      <?php endif ?>
      <?php if (isset($_SESSION["username"])): ?>
        <p>Welcome <strong><?php echo $_SESSION['username'] ?></strong></p>
        <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
      <?php endif ?>
    </div>
  </body>
</html>
