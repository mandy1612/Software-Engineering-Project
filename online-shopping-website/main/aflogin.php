
<?php 
  session_start(); 

  if (!isset($_SESSION['id'])) {
  	$_SESSION['msg'] = "You must login first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: home.php");
  }
 
?>
<!DOCTYPE html>
<html>
 <head>
     <title>

     </title>
    
     
 </head>

<style> 

@import "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";

*{
    margin: 0px;
    padding: 0px;
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
    color: #fff;
    padding: 5px 20px;
    border: 1px solid transparent;
    transition: 0.6s ease 0s;
    position: relative;
}

ul li a:hover{
    background-color: #fff;
    color: #000;
}

ul li.active a{
    background-color: #fff;
    color: #000;
}

.left{
    
    float: center;
    background-color: #000;
    max-width: 1600px;
    display: flex;
    justify-content: space-between;
    border: 1px solid transparent;
    transition: 0.6s ease 0s;
    position: relative;
    padding:10px 20px;
    height: 40px;

      }

.left .lside {
    float: left;
    margin-left: 50px;
    border: 1px solid transparent;
    transition: 0.6s ease 0s;

              }



  .left .text{
      float: center;
      display: block;
    }
  
  .left .text .text1{
      color: #fff;
      float: center;
      font-size: 25px;
      justify-content:space-around;
      margin-left: 40px;
      }

  .left .text .text2{
      font-size: 15px;
      color: #fff;
     }

  .left .right{
      float: right;
      margin-right: 30px;
      border: 1px solid transparent;
      transition: 0.6s ease;
  
       }

  .upper-center{
    float: center;
    background-color:gray;
    max-width: 1600px;
    display: flex;
    justify-content: space-between;
    border: 1px solid transparent;
    transition: 0.6s ease 0s;
    position: relative;
    padding:10px 20px;
    height: 40px;
  
     }

  .upper-center .logo2{
      float: left; border: 1px solid transparent;
      transition: 0.6s ease;
     
      }

   .upper-center .upper-right{
      float: right;
      border: 1px solid transparent;
      transition: 0.6s ease;
   }

  

.username{
    float: right;
    margin-top: 1px;
    margin-right: 30px;
    margin-left: 10px;
    color:white;
}


.serch{
    position: absolute;
    background-color: #2f3640;
    border-radius: 20px;
    padding: 10px;
    margin-top: 15px;
    float: right;
    margin-left: 1160px;
    margin-bottom: 0px;
  }
  .serch .input{
     border: none;
     outline: none;
     background: none;
     float: left;
     color: #fff;
     font-size: 15px;
     transition: 0.4s all;
     line-height: 10px;
     width:0px;
     margin-top: 5px;
  }

  .serch .sbtn{
    color: #1abc9c;
    float: right;
    text-decoration: none;
    text-align: center;
    width: 25px;
    height: 25px;
    line-height: 25px;
    border-radius: 50%;
  }

  .serch:hover .input{
    width:250px;
    padding: 0 10px;
  }

  .serch:hover .sbtn{
    background-color: #fff;
  }






  
.row{
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%,3000%);
    justify-content: space-between;
    max-width: 1600px;
    transition: 0.6s ease 0s;
    padding:10px 20px;
}

  .shop {
    position: absolute;
    overflow: hidden;
    margin-left: 250px;
  }
  .shop:before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0px;
    width: 60%;
    background: #12c2e9;  
  background: -webkit-linear-gradient(to bottom, #f64f59, #c471ed, #12c2e9); 
  background: linear-gradient(to bottom, #f64f59, #c471ed, #12c2e9); 
    opacity: 0.9;
    -webkit-transform: skewX(-45deg);
    -ms-transform: skewX(-45deg);
    transform: skewX(-45deg);
  }
  
  .shop:after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 1px;
    width: 100%;
   background: #12c2e9;  
  background: -webkit-linear-gradient(to bottom, #f64f59, #c471ed, #12c2e9);  
  background: linear-gradient(to bottom, #f64f59, #c471ed, #12c2e9); 
    opacity: 0.9;
    -webkit-transform: skewX(-45deg) translateX(-100%);
    -ms-transform: skewX(-45deg) translateX(-100%);
    transform: skewX(-45deg) translateX(-100%);
  }
  
  .shop .shop-img {
    position: relative;
    background-color: #E4E7ED;
    z-index: -1;
  }

  .shop .shop-img>img {
    width: 100%;
    -webkit-transition: 0.2s all;
    transition: 0.2s all;
  }
  
  .shop:hover .shop-img>img {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
  }
  
  .shop .shop-body {
    position: absolute;
    top: 0;
    width: 75%;
    padding: 30px;
    z-index: 10;
  }
  
  .shop .shop-body h3 {
    color: #FFF;
    text-decoration: none;
  }
  
  .shop .shop-body .cta-btn {
    color: #FFF;
    text-transform: uppercase;
    text-decoration: none;
  }


  .shop3 {
    position: absolute;
    overflow: hidden;
    margin-left: 1050px;
    
  }
  .shop3:before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0px;
    width: 60%;
    background: #12c2e9;  
    background: -webkit-linear-gradient(to bottom, #f64f59, #c471ed, #12c2e9); 
    background: linear-gradient(to bottom, #f64f59, #c471ed, #12c2e9); 
    opacity: 0.9;
    -webkit-transform: skewX(-45deg);
    -ms-transform: skewX(-45deg);
    transform: skewX(-45deg);
  }
  
  .shop3:after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 1px;
    width: 100%;
   background: #12c2e9;  
  background: -webkit-linear-gradient(to bottom, #f64f59, #c471ed, #12c2e9);  
  background: linear-gradient(to bottom, #f64f59, #c471ed, #12c2e9); 
    opacity: 0.9;
    -webkit-transform: skewX(-45deg) translateX(-100%);
    -ms-transform: skewX(-45deg) translateX(-100%);
    transform: skewX(-45deg) translateX(-100%);
  }
  
  .shop3 .shop-img {
    position: relative;
    background-color: #E4E7ED;
    z-index: -1;
  }

  .shop3 .shop-img>img {
    width: 100%;
    -webkit-transition: 0.2s all;
    transition: 0.2s all;
  }
  
  .shop3:hover .shop-img>img {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
  }
  
  .shop3 .shop-body {
    position: absolute;
    top: 0;
    width: 75%;
    padding: 30px;
    z-index: 10;
  }
  
  .shop3 .shop-body h3 {
    color: #FFF;
  }
  
  .shop3 .shop-body .cta-btn {
    color: #FFF;
    text-transform: uppercase;
    text-decoration: none;
  }



  .shop2 {
    position: absolute;
    overflow: hidden;
    margin-left: 650px;
  }
  .shop2:before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0px;
    width: 60%;
    background: #12c2e9;  
  background: -webkit-linear-gradient(to bottom, #f64f59, #c471ed, #12c2e9); 
  background: linear-gradient(to bottom, #f64f59, #c471ed, #12c2e9); 
    opacity: 0.9;
    -webkit-transform: skewX(-45deg);
    -ms-transform: skewX(-45deg);
    transform: skewX(-45deg);
  }
  
  .shop2:after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 1px;
    width: 100%;
   background: #12c2e9;  
  background: -webkit-linear-gradient(to bottom, #f64f59, #c471ed, #12c2e9);  
  background: linear-gradient(to bottom, #f64f59, #c471ed, #12c2e9); 
    opacity: 0.9;
    -webkit-transform: skewX(-45deg) translateX(-100%);
    -ms-transform: skewX(-45deg) translateX(-100%);
    transform: skewX(-45deg) translateX(-100%);
  }
  
  .shop2 .shop-img {
    position: relative;
    background-color: #E4E7ED;
    z-index: -1;
  }

  .shop2 .shop-img>img {
    width: 100%;
    -webkit-transition: 0.2s all;
    transition: 0.2s all;
  }
  
  .shop2:hover .shop-img>img {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
  }
  
  .shop2 .shop-body {
    position: absolute;
    top: 0;
    width: 75%;
    padding: 30px;
    z-index: 10;
  }
  
  .shop2 .shop-body h3 {
    color: #FFF;
  }
  
  .shop2 .shop-body .cta-btn {
    color: #FFF;
    text-transform: uppercase;
    text-decoration: none;
  }


.mid{
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%,190%);
    display: flex;
    justify-content: space-between;
    max-width: 1600px;
    transition: 0.6s ease 0s;
    padding:10px 20px;
   
    
}

.card {
    float: left;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 5px; /* 5px rounded corners */
    background-color: bisque;
   height: 500;
  }

  .card2 {
    float: center;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 5px; /* 5px rounded corners */
    background-color: bisque;
   height: 500;
  }

  .card3 {
    float: right;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 5px; /* 5px rounded corners */
    background-color: bisque;
   height: 500;
  }


  .mid2{
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%,210%);
    display: flex;
    justify-content: space-between;
    max-width: 1600px;
    transition: 0.6s ease 0s;
    padding:10px 20px;
    
    
}

.card4 {
    float: left;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 5px; /* 5px rounded corners */
    background-color: bisque;
   height: 500;
  }

  .card5 {
    float: center;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 5px; /* 5px rounded corners */
    background-color: bisque;
   height: 500;
  }

  .card6 {
    float: right;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 5px; /* 5px rounded corners */
    background-color: bisque;
   height: 500;
  }




  img {
    border-radius: 5px 5px 0 0;
    cursor: pointer;
    
  }

  .container{
      float: center;
      margin-left: 160px;
      cursor: pointer;
  }

  .container a{
      text-decoration: none;
      color: #000;
  }

   .mid .text{
      color:black;
      margin-left: 160px;
  }

  .mid2 .text2{
    color:black;
    margin-left: 160px;
}

  .heart{
    float: left;
    margin-top: 10px;
    cursor: pointer;
   
}

.eye{
    float: right;
    margin-top: 10px;
   margin-right: 180px;
   cursor: pointer;

}

.mid  ul{
    justify-content: space-between;
    
}

 .mid ul a{
    text-decoration: none;
    color:black;
    border: 1px solid transparent;
    transition: 0.6s ease 0s;
    
}

 .mid ul a:hover{
    background-color: #fff;
    color:red;
}

 .mid ul.active a{
    background-color: #fff;
    color:red;
}



.last{
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%,445%);
    display: flex;
    background-color: #2f3640;
    justify-content: space-between;
    max-width: 1600px;
    transition: 0.6s ease 0s;
    padding:10px 20px;
    height: 250px;
    
  }

  .last .lleft{
    float: left;
    margin-left: 250px;
    margin-top: 30px;
  }
 
   .last .lleft .lleftc{
     margin-top: 18px;
     cursor: pointer;
   }

   .last .lleft .lleftc a{
   color: #fff;
   text-decoration: none;
  }

  .last .lleft .lleftc a:hover{
   text-decoration: underline;
   color: #fff;
   }

   .last .lleft .lleftc .c{
     margin-top: 15px;
   }

  .last .lcenter{
    float: center;
    margin-top: 30px;
  }
 
   .last .lcenter .lcenterc{
    margin-top: 18px;
    cursor: pointer;
    justify-content: space-between;
   }

   .last .lcenter .lcenterc a{
    color: #fff;
    text-decoration: none;
   }

   .last .lcenter .lcenterc a:hover{
    text-decoration: underline;
    color: #fff;
    }


   .last .lcenter .lcenterc .w{
    margin-top: 15px;
   }

   .last .lcenter .lcenterc .ch{
    margin-top: 15px;
   }

   .last .lcenter .lcenterc .b{
    margin-top: 15px;
   }

  .last .lright{
    float: right;
    margin-right: 250px;
    margin-top: 30px;
  }

  .last .lright .lrightc{
    margin-top: 18px;
    cursor: pointer;
  }
  
  .last .lright .lrightc .h{
    margin-top: 15px;
   }

   .last .lright .lrightc a{
    color: #fff;
    text-decoration: none;
   }
  
   .last .lright .lrightc a:hover{
    text-decoration: underline;
    color: #fff;
    }

    .last2{
      position: relative;
      top: 50%;
      left: 50%;
      transform: translate(-50%,2000%);
      display: flex;
      background-color: dimgray;
      justify-content: space-between;
      max-width: 1600px;
      transition: 0.6s ease 0s;
      padding:10px 20px;
      height: 40px;
      
    }

    .last2 .pn{
      float: left;
      margin-left: 410px;
    }

    .last2 .pn a{
      color: #fff;
      text-decoration: none;
     }
    
     .last2 .pn a:hover{
      text-decoration: underline;
      color: #fff;
      }

    .last2 .cus{
      float: center;
    }

    .last2 .cus a{
      color: #fff;
      text-decoration: none;
     }
    
     .last2 .cus a:hover{
      text-decoration: underline;
      color: #fff;
      }

    .last2 .co{
      float: right;
      margin-right: 430px;
    }

    
    .navbar {
      overflow: hidden;
      background-color: #333;
      font-family: Arial;
    }
    
  
    
    /* The dropdown container */
    .dropdown {
      float: left;
      overflow: hidden;
      color: white;
     
    }
    
    /* Dropdown button */
    .dropdown .dropbtn {
      font-size: 16px;
      border: none;
      outline: none;
      color: black;
      margin-left: 10px;
    
    }
    
    /* Add a red background color to navbar links on hover */
    .navbar a:hover, .dropdown:hover .dropbtn {
      background-color:white;
      color: black;
    }
    
    /* Dropdown content (hidden by default) */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      width: 600px;
      left: 0;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
      margin-left: 150px;
      margin-top: 1px;
    }
    
    /* Mega Menu header, if needed */
    .dropdown-content .header {
      background: red;
      padding: 1px;
      color: white;
    }
    
    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
      display: block;
    }
    
    /* Create three equal columns that floats next to each other */
    .column {
      float: left;
      width: 32.666%;
      padding: 2px;
      background-color: #ccc;
      height: 300px;
     
    }
    .text{
      margin-left: 15px;
    }
  
    .foot{
        display: block;
        color:red;
        margin-left: 15px;
        
    }
  
    .top{
      display: block;
      color:red;
      margin-left: 15px;
  }
  
  .bot{
      display: block;
      color:red;
      margin-left: 15px;
  }
  .foot2{
      display: block;
      color:red;
      margin-left: 15px;
  }
  .west{
      display: block;
      color:red;
      margin-left: 15px;
  }
  .eth{
      display: block;
      color:red;
      margin-left: 15px;
  }
  .mo{
      display: block;
      color:red;
      margin-left: 15px;
  }
  .ma{
      display: block;
      color:red;
      margin-left: 15px;
  }
    
    /* Style links inside the columns */
    .column a {
      float: none;
      color: black;
      padding: 1px;
      text-decoration: none;
      display: block;
      text-align: left;
      margin-left: 15px;
    }
    
    /* Add a background color on hover */
    .column a:hover {
      background-color: #ddd;
    }
    
    /* Clear floats after the columns */
    .row2:after {
      content: "";
      display: table;
      clear: both;
    }

    .slideshow-container2 {
      width: 1532px;
    height: 500px;
    overflow: hidden;
    margin-top: 0px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-35%);
    margin-top: 0px;
  
}

.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}


/* Caption text */


/* Number text (1/3 etc) */


/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  display: none;
}

.slideshow-container2 img{
    width: 100%;
    height: 100%;
  }

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
  





</style>


 <body>
     <header>


     <div class="upper-center">
                             
                             <div class="img/logo2">
                                     <a href="#">
                                     <img src="img/logo.png" alt="logo" width="80" height="60">
                                     </a>
                                 </div> 
                          
                                     <ul>
                                     <i class="fa fa-user-circle"></i>
                                     <li><a href="myaccount.php">My Account</a></li>
                                     <i class="fa fa-shopping-bag"></i>
                                     <li><a href="wishlist.php">wishlist <span calss= "badge badge-danger" width=15px style="background-color: red" id="wishlist-item"></span></a></li>
                                         <li><a href="services.php">Delivery</a></li>
                                         <li><a href="help.php">Help</a></li>
                                     </ul>
                                     <div class="upper-right">
                                    <ul>
                                    <div class="username">
                                          <!-- logged in user information -->
                                              <?php  if (isset($_SESSION['username'])) : ?>
                                            	<p> <strong><?php echo $_SESSION['username']; ?></strong></p>
                                              <?php endif ?>
                                     </div>
                
                                     <i class="fa fa-sign-out"></i>
                                        <li><p> <?php  if (isset($_SESSION['username'])) : ?> <a href="aflogin.php?logout='1'" >logout</a> </p>
                                                 <?php endif ?></li>
                                        <i class="fa fa-shopping-cart"></i>
                                        <li><a href="cart.php">Cart</a></li>
                                    </ul>
                                 </div>
                          
                             </div>
                                
                                      
                             <div class="left">
                                     <ul>
                                         <div class="lside">
                                         <li class="active"><a href="#">Home</a></li>
                                         <li><a href="services.php">About</a> </li>
                          
                                         </div>
                                      
                                         <div class="dropdown">
  <button class="dropbtn">Category
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content">
   
    <div class="row2">
      <div class="column">
        <h3 class="text">MEN</h3>
        <div class="foot">Footwear
        <a href="demo.php">Sports Shoes</a>
        <a href="demo2.php">Casual Shoes</a>
      </div>
      <div class="top">Top wear
        <a href="demo3.php">T-Shirts</a>
        <a href="demo4.php">Shirts</a>
        
      </div>
      <div class="bot">Bottom wear
        <a href="demo5.php">Jeans</a>
        <a href="demo6.php">Track pants</a>
       
      </div>
      </div>
      <div class="column">
        <h3 class="text">WOMEN</h3>
        <div class="foot2">Footwear
        <a href="demo7.php">Flats</a>
        <a href="demo8.php">Heels</a>
        
      </div>
      <div class="west">Western Wear
        <a href="demo9.php">Top & T-shirts</a>
        <a href="demo10.php">Jeans</a>
       
      </div>
      <div class="eth">Ethnic Wear
        <a href="demo11.php">Sarees</a>
        <a href="demo12.php">Kurtas & Kurtis</a>
       
      </div>
      </div>
      <div class="column">
        <h3 class="text">ELECTRONIC</h3>
        <div class="mo">Mobiles
        <a href="demo13.php">Feature phone</a>
       
        <a href="demo14.php">Smart phone</a>
      </div>
      <div class="ma">Mobile Accessories
        <a href="demo15.php">Headphones</a>
        <a href="demo16.php">Power Bank</a>
        
      </div>
      </div>
    </div>
  </div>
  </div>
 

                                      </ul>
                                      <div class="text">
                                     <p class="text1">        RAD       </p>
                                     <p class="text2">EVERYTHING IS HERE</p>
                                 </div> 
                                 <div class="right">
                                    <ul>
                                        <li><a href="#">Store</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                 </div>
                          
                                      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
                                      <script type="text/javascript">
                                      $(document).on('click','ul li',function(){
                                          $(this).addClass('active').siblings().removeClass('active')
                                      })
                                      </script>
                                 </div>
                             
                                 <form action="serach.php" method="POST">
                                    <div class="serch">
                                      <input class="input" type="text" name="box" placeholder="Search for Products and More....">
                                      <a class="sbtn" type="submit">
                                      <i class="fa fa-search"></i>
                                      </a>
                                      
                                      </a>
                                    </div>
                             </form>


                             <div class="slideshow-container2">


<div class="mySlides fade">
 
<img src="img/slide1.jpg" alt=""  style="width:100%">
</div>

<div class="mySlides fade">
  
<img src="img/slide6.jpg" alt=""style="width:100%" >
  
  
</div>

<div class="mySlides fade">
  
<img src="img/slide7.jpg" alt=""  style="width:100%">
  
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  
</div>

<script>
var slideIndex = 0;
var slideIndex2 = 1;
showSlides();
function plusSlides(n) {
  showSlides(slideIndex2 += n);
}

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


     <div class="row">
					
					<div class="col-md-4 col-xs-6">
						<a href="men.php"><div class="shop">
							<div class="shop-img">
								<img src="img/slide5.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Men<br>clothes Collection</h3>
								<a href="men.php" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div></a>
					</div>

					<div class="col-md-4 col-xs-6">
						<a href="women.php"><div class="shop2">
							<div class="shop-img">
								<img src="img/slide5.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>women<br> clothes Collection</h3>
								<a href="women.php" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div></a>
					</div>

					<div class="col-md-4 col-xs-6">
						<a href="eletonic.php"><div class="shop3">
							<div class="shop-img">
								<img src="img/slide5.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>electronic<br>Collection</h3>
								<a href="eletonic.php" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div></a>
					</div>
				
        </div>  


     <div class="mid">

     <div class="card">
 <a href="#"> <img src="img/shirt1.jpeg" alt="" style="width:400" height="400"></a>
  <div class="container">
   <a href="#" ><h4><b>John Doe</b></h4></a>
  </div>
    <div class="text">
    <p>deep</p>
       <ul>
          <button class="heart"> <i class='fa fa-heart-o'></i></button>
          <button class="eye"> <i class='fa fa-eye'></i></button>
       </ul>
  </div>
     </div>

     <div class="card2">
     <a href="#"> <img src="img/shirt1.jpeg" alt="" style="width:400" height="400"></a>
  <div class="container">
   <a href="#" ><h4><b>John Doe</b></h4></a>
  </div>
    <div class="text">
    <p>deep</p>
       <ul>
       <button class="heart"> <i class='fa fa-heart-o'></i></button>
          <button class="eye"> <i class='fa fa-eye'></i></button>
       </ul>
  </div>
     </div>

     <div class="card3">
     <a href="#"> <img src="img/shirt1.jpeg" alt="" style="width:400" height="400"></a>
  <div class="container">
   <a href="#" ><h4><b>John Doe</b></h4></a>
  </div>
    <div class="text">
    <p>deep</p>
       <ul>
       <button class="heart"> <i class='fa fa-heart-o'></i></button>
          <button class="eye"> <i class='fa fa-eye'></i></button>
       </ul>
  </div>
     </div>

     </div>


     <div class="mid2">

<div class="card4">
<a href="#"> <img src="img/shirt1.jpeg" alt="" style="width:400" height="400"></a>
  <div class="container">
   <a href="#" ><h4><b>John Doe</b></h4></a>
  </div>
<div class="text2">
<p>deep</p>
  <ul>
  <button class="heart"> <i class='fa fa-heart-o'></i></button>
          <button class="eye"> <i class='fa fa-eye'></i></button>
  </ul>
</div>
</div>

<div class="card5">
<a href="#"> <img src="img/shirt1.jpeg" alt="" style="width:400" height="400"></a>
  <div class="container">
   <a href="#" ><h4><b>John Doe</b></h4></a>
  </div>
<div class="text2">
<p>deep</p>
  <ul>
  <button class="heart"> <i class='fa fa-heart-o'></i></button>
          <button class="eye"> <i class='fa fa-eye'></i></button>
  </ul>
</div>
</div>

<div class="card6">
<a href="#"> <img src="img/shirt1.jpeg" alt="" style="width:400" height="400"></a>
  <div class="container">
   <a href="#" ><h4><b>John Doe</b></h4></a>
  </div>
<div class="text2">
<p>deep</p>
  <ul>
  <button class="heart"> <i class='fa fa-heart-o'></i></button>
          <button class="eye"> <i class='fa fa-eye'></i></button>
    </ul>
</div>
</div>

</div>


<div class="last">
     
     <div class="lleft">
     <p style="color: white">Get to Know Us </p>
       <div class="lleftc">
      <a color="white" href="about.php">About Us</a>
       <div class="c">
       <a color="white" href="contact.php">Contact</a>
     </div>
     </div>
     </div>
 
     <div class="lcenter">
     <p style="color: white">Products</p>
     <div class="lcenterc">
     <a color="white" href="men.php">Men</a>
     <div class="w">
     <a color="white" href="women.php">Women</a>
     </div>
      <div class="ch">
      <a color="white" href="electonic.php">Electronic</a>
      </div>
    
     </div>
     </div>
     
     <div class="lright">
     <p style="color: white">Let Us Help You</p>
       <div class="lrightc">
       <a color="white" href="services.php">100% Purchase Protection</a>
     <div class="h">
     <a color="white" href="help.php">Help</a>
     </div>
     </div>
     </div>
  </div>
 
     <div class="last2">
       <div class="pn">
     <a color="white" href="services.php">Privacy Notice</a>
     </div>
     <div class="cus">
     <a color="white" href="services.php">Condition of Use & Notice</a>
     </div>
     <div class="co">
       <p>© 2020,RAD.com</p>
     </div>
     </div>
     </header>


 </body>
</html>  
