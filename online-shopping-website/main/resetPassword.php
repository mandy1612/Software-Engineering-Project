<?php
include("dbconn.php");

if(!isset($_GET["code"])){
   exit("cant't find page");
}

$code = $_GET["code"];

$getEmailquery = mysqli_query($conn,"select email from password_resets where code='$code'");


if(isset($_POST["password"])){
    $pw = $_POST["password"];

    $row = mysqli_fetch_array($getEmailquery);
    $email = $row["email"];

    $query = mysqli_query($conn,"update user set password='$pw' where email='$email'");

    if($query){
        $query = mysqli_query($conn,"delete from password_resets whrer code='$code'");
        exit("<p> your password has been changed please re login your account for countiue</p>
          <a href='login.php'>login</a> ");
    }
    else{
        exit("something went wrong");
    }
}

?>
<html>
<head>
<title>reset password</title>
<link rel="stylesheet" type="text/css" href="css/resetpassword.css">
</head>
<body>
    <div class="password">
<form method="POST">
   
   <input type="password" calss="texr" id="myInput" placeholder="new Password" name="password" value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
     <br>
    <input type="submit" class="btn" name="submit" value="Update password"> 
 </form>
    </div>
</body>
</html>