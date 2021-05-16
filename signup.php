<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tyizo - Sign Up</title>
</head>
<body>
    <?php include_once './header.php';?>
<?php 
  
    
  require('./db/database.php');
  session_start();
  // When form submitted, insert values into the database.
  if (isset($_REQUEST['username'])) {
      // removes backslashes
      $username = stripslashes($_REQUEST['username']);
      //escapes special characters in a string
      $username = mysqli_real_escape_string($con, $username);
      $email    = stripslashes($_REQUEST['email']);
      $email    = mysqli_real_escape_string($con, $email);
      $password = stripslashes($_REQUEST['password']);
      $password = mysqli_real_escape_string($con, $password);
      $query    = "INSERT into `users` (username, password, email)
                   VALUES ('$username', '" . md5($password) . "', '$email')";
      $result   = mysqli_query($con, $query);
      if ($result) {
          echo "<div class='form'>
                <h3>You are registered successfully.</h3><br/>
                <p class='link'>Click here to <a href='login.php'>Login</a></p>
                </div>";
      } else {
          echo "<div class='form'>
                <h3>Required fields are missing.</h3><br/>
                <p class='link'>Click here to <a href='signup.php'>registration</a> again.</p>
                </div>";
      }
  } else {
?>
<section class="signup-form">
    <h2>Sign Up</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Username .. " require>
        <br>
        <input type="text" name="email" placeholder="Email .. " require>
        <br>
        <input type="password" name="password" placeholder="Password .. " require>
        <br>
        <button type="submit" name="submit">Sign Up</button>
        <br>
        <br>


    </form>
</section>
<?php
    }
?>
<?php
    include_once './footer.php';   
?>

</body>
</html>
