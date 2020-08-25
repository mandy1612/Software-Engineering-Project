

<?php include('server.php') ?>

<html>
    <head>
        <title>
            Sign up
        </title>
        <link rel="stylesheet" type="text/css" href="css/signup.css">
    </head>
    <body>
        <header>
        <div class="main">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                 </ul>
     
                 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
                 <script type="text/javascript">
                 $(document).on('click','ul li',function(){
                     $(this).addClass('active').siblings().removeClass('active')
                 })
                 </script>
     
            </div>

        <div class="Signup-box">
            <h3>CREATE ACCOUNT</h3>
        
            <form action="signup.php" method="POST">
            <?php include('errors.php'); ?>

            <div class="textbox">

                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="First Name" name="firstname" value="" required>
            </div>

            <div class="textbox">
                
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Last Name" name="lastname" value="" required>
            </div>
            
            <div  class="textbox">
                
                <i class="fa fa-phone" aria-hidden="true"></i>
                <input type="text" placeholder="9884*****" name="phonenumber" pattern="\d{10}" maxlength="10"  value=""   required>
            </div>
               
            <div class="textbox">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input type="email" placeholder="Email" name="email" value="" required>
               </div>

            <div class="textbox">
                
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username" name="username" value="" required>
            </div>
    
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" id="myInput" placeholder="Password" name="password" value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                <span class="eye" onclick="myFunction()">
                    <i id="hide1" class="fa fa-eye"></i>
                    <i  id="hide2" class="fa fa-eye-slash"></i>
                </span>
            </div>

            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" id="myInput2" placeholder="Comfirm Password" name="cwd" value="" required>
                <span class="eye" onclick="myFunction2()">
                    <i id="hide3" class="fa fa-eye"></i>
                    <i  id="hide4" class="fa fa-eye-slash"></i>
                </span>
            </div>
            <input class="btn" type="submit" name="signup" value="Sign up" >
            <p style="color: white;">By clicking the Sign Up button,you agree to our <a style="color: aqua;" href="services.php">Terms & Condition</a></p>
            </form>
        </div>
        </header>
  
        <script>
            function myFunction(){
                var x = document.getElementById("myInput");
                var y = document.getElementById("hide1");
                var z = document.getElementById("hide2");

            if(x.type === 'password'){
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            }
            else{
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }
       
        function myFunction2(){
                var x = document.getElementById("myInput2");
                var y = document.getElementById("hide3");
                var z = document.getElementById("hide4");

            if(x.type === 'password'){
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            }
            else{
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }


    </script>

    </body>
</html>
