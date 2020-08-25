
<?php include('server.php') ?>

<!DOCTYPE html>
<html>

<head>
<title>login page</title>
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
    <header>
       <div class="main">
           <ul>
               <li><a href="home.php">Home</a></li>
               <li><a href="services.php">Services</a></li>
               <li><a href="about.php">About</a> </li>
               <li><a href="contact.php">Contact</a></li>
            </ul>

            <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
            <script type="text/javascript">
            $(document).on('click','ul li',function(){
                $(this).addClass('active').siblings().removeClass('active')
            })
            </script>

       </div>
       <div class="login-box">

        <h1> Login</h1>

        <form action="login.php" method="POST">

        <?php include('errors.php'); ?>

       

        <div class="textbox">
            
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="Username" name="username" value="" required>
        </div>

        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password"  placeholder="Password" name="password" value="" required>
        </div>
        <div class="fpw">
        <p><a href="requestReset.php">Forgot your password?</a></p>
        </div>
          <input class="btn" type="submit" name="signin" value="Sign in">
        <p style="color: white;">Don't have an account? <a style="color: red;" href="signup.php">Sign up</a></p>
        </form>   
      </div>
     </header>


</body>
</html>