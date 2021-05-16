<?php include_once './header.php';?>
<link rel="stylesheet" href="../css/style.css">

<section class="email-form">
    <form action="./contect.php" method="post">
        <h2>Send Me Email</h2>
        <input type="text" name="subject" placeholder="Your Subject .." >
        <br>
        <input type="text" name="msg" placeholder="Message ..">
        <br>
        <input type="text" name="email" id="email" placeholder="Enter Your Email .." >
        <br>
        <button type="submit" name="submit">Send</button>
    </form>
</section>

<style>
  .email-form {
    text-align: center;
    font-size: 20px;
    padding-top: 120px;
}

</style>
<?php 

// Put any email you want in $to

if(isset($_POST['submit'])){
    $to = 'someone@gmail.com';
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];
    $email = $_POST['email'];
    $headers = "From: $email" . "\r\n" . 
               "Reply-To: $to" . "\r\n" . 
               "X-Mailer: PHP/" . phpversion();

    mail($to, 
        $subject, 
        $msg,
        $headers);
}

?>

<?php include_once './footer.php'; ?>


<title>Tyizo - Contect</title>