
<?php include('helpaction.php') ?>

<!DOCTYPE html>
<html>

<head>
<title></title>


</head>

<style> 

@import "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";

*{
    margin: 0;
    padding: 0;
    font-family: Century Gothic;
background-color: #fff;
}



ul{
    float: right;
    list-style-type: none;
    margin-top: 25px;
}

ul li{
   display: inline-block; 
}

ul li a{
    text-decoration: none;
    color: #000;
    padding: 5px 20px;
    border: 1px solid transparent;
    transition: 0.6s ease;

}

ul li a:hover{
    background-color: #000;
    color: #fff;
}

ul li.active a{
    background-color: #fff;
    color: #000;
}

.main{
    max-width: 1400px;
}

.login-box{
    width: 280px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    
    
}

.login-box h1{
    text-decoration: none;
    color: aquamarine;
    float: left;
    font-size: 40px;
    border-bottom: 6px solid #4caf50;
    margin-bottom: 50px;
    padding: 13px 0;
    

}

.textbox{
    width: 100%;
    overflow: hidden;
    font-size: 20px;
    padding: 8px 0;
    margin: 8px 0;
    border-bottom: 1px solid #4caf50 ;
    
}

.textbox i{
    width: 26px;
    float: left;
    text-align: center;
    color: #000;
}

.textbox input{
    border: none;
    outline: none;
    background: none;
    color: black;
    font-size: 18px;
    width: 80%;
    float: left;
    margin: 0 10px;
}

.btn{
    width: 100%;
    background: none;
    border: 2px solid #4caf50;
    color: black;
    padding: 5px;
    font-size: 18px;
    cursor: pointer;
    margin: 12px 0;
}

.add{
   width: 250px;
   height: 75px;
   
   display: flex;
   text-decoration-color: #fff;
}


</style>

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

        <h1> help</h1>

        <form action="help.php" method="POST">
        <?php include('errors.php'); ?>
        <div class="textbox"> 
            <input type="text" placeholder="Username" name="username" value="" required>
        </div>

        <div  class="textbox">
                <input type="text" placeholder="9884*****" name="phonenumber" pattern="\d{10}" maxlength="10"  value=""   required>
            </div>

        <div class="textbox">
            
            <textarea class="add" name="problem" placeholder="write your problem" required></textarea> 
        </div>
        
          <input class="btn" type="submit" name="help" value="submit">
        
        </form>   
      </div>
     </header>


</body>
</html>