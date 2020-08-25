<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$phonenumber = '';
$errors = array(); 


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'final');

// REGISTER USER
if (isset($_POST['signup'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['cwd']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array


  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' OR phonenumber='$phonenumber' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }

    if ($user['phonenumber'] === $phonenumber) {
        array_push($errors, "phonenumber already exists");
      }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = ($password_1);// the password before saving in the database

  	$query = "INSERT INTO user (firstname,lastname,phonenumber, email,username, password) 
  			  VALUES('$firstname','$lastname','$phonenumber','$email','$username','$password')";
    mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
  }
}



// LOGIN USER

  if (isset($_POST['signin'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (count($errors) == 0) {
      $password = ($password);
      $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
      $results = mysqli_query($db, $query);
      $count = mysqli_num_rows($results);
      $row = mysqli_fetch_array($results);
        $_SESSION['id'] = $row['uid'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['success'] = "You are now logged in";
        header('location: aflogin.php');
    }
  }

?>