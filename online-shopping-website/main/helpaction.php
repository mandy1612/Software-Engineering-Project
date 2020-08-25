<?php 
require 'dbconn.php';

session_start();
if (isset($_SESSION["id"])) {
    $uid = $_SESSION['id'];

    $errors = array(); 

    if (isset($_POST['help'])) {
  // receive all input values from the form
  
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
  $problem = mysqli_real_escape_string($conn, $_POST['problem']);

  if (count($errors) == 0){
    $sql = "insert into help(username,phonenumber,problem,uid) values('$username','$phonenumber','$problem','$uid')";
    
   
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header('location: afhelp.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
    }
}
        