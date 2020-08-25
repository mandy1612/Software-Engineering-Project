<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'dbconn.php';

if(isset($_POST["email"])){

        $emailTo = $_POST["email"];

        $code = uniqid(true);
        $query = mysqli_query($conn,"insert into password_resets (code,email) values ('$code','$emailTo')");
     //   if(!$query){
       //     exit("Error");
       // }
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

    try {
        //Server settings
                            
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'abc@gmail.com';                     // SMTP username
        $mail->Password   = 'abc';                               // SMTP password
        $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('abc.com', 'abc');
        $mail->addAddress("$emailTo" );     // Add a recipient
        $mail->addReplyTo('no-reply@abc.com', 'No-reply');
    
        // Content
        $url= "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/resetPassword.php?code=$code";
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Youe password reset link';
        $mail->Body    = "<h1> You requested a password reset</h1>
                           Click <a href='$url'>This link</a>to do so";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Rest password link has been sent to you email';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
      exit();
}


?>
<html>
<head>
<title>reset password</title>
<link rel="stylesheet" type="text/css" href="css/resetpassword.css">
</head>
<body>
<div class="email">
<form method="POST">
    <input type="text" class="text" name="email" placeholder="Email" autocomplete="off">
       <br>
       <input type="submit"class="btn" name="submit" value="submit">
</form>
</div>
</body>
</html>