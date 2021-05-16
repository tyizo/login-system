<?php include_once './header.php';?>
<link rel="stylesheet" href="../css/style.css">
<?php 
    require('./db/database.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysqli_connect_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: home.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
<section class="login-form">
    <h2>Login</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Username .. ">
        <br>
        <input type="password" name="password" placeholder="Password .. ">
        <br>
        <button type="submit" name="submit">Login</button>
    </form>
</section>

<?php 
    }
?>

<?php include_once './footer.php'; ?>

<title>Tyizo - Login</title>
