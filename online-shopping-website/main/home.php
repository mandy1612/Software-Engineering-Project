
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <link rel="icon" href="img/logo3.ico" type="image/ico">
</head>
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
                                         <li><a href="#">Wishlist</a></li>
                                         <li><a href="#">Delivery</a></li>
                                         <li><a href="#">Help</a></li>
                                     </ul>
                                     <div class="upper-right">
                                    <ul>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                        <li><a href="login.php">login</a></li>
                                        <i class="fa fa-user-plus"></i>
                                        <li><a href="signup.php"> signup</a></li>
                                        
                                        <li><a href="cart2.php"><i class="fa fa-shopping-cart"></i> <span calss= "badge badge-danger" style="background: green"></span></a></li>
                                    </ul>
                                 </div>
                          
                             </div>
                                
                                      
                                 <div class="left">
                                     <ul>
                                         <div class="lside">
                                         <li class="active"><a href="#">Home</a></li>
                                         <li><a href="about.php">About</a> </li>
                          
                                         </div>
                                      
                                         <div class="dropdown">
  <button class="dropbtn">Category
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content">
   
    <div class="row">
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
                                 <div class="slidershow middle">
                          
                          <div class="slides">
                            <input type="radio" name="r" id="r1" checked>
                            <input type="radio" name="r" id="r2">
                            <input type="radio" name="r" id="r3">
                           
                            <div class="slide s1">
                              <img src="img/slide1.jpg" alt="" >
                            </div>
                            <div class="slide">
                              <img src="img/slide6.jpg" alt="" >
                            </div>
                            <div class="slide">
                              <img src="img/slide7.jpg" alt="" >
                            </div>
                          
                          </div>
                          
                          <div class="navigation">
                            <label for="r1" class="bar"></label>
                            <label for="r2" class="bar"></label>
                            <label for="r3" class="bar"></label>
                           
                          </div>
                          </div>


   <div class="fashion">
       <div class="shirt">
         <img src="img/slide5.jpg">
       </div>
       <div class="con">
        <h1><b>Tryme Fashion</b></h1>
        <h3><a href="products1.php"> Men's Cotton Casual White Shirt for Men Full Sleeves </a></h3>
       <p>Currently available.</p>
       </div>
      </div>


      <div class="fashion2">
       <div class="con2">
        <h1><b>Tryme Fashion</b></h1>
        <h3><a href="products2.php"> Men's Cotton Casual White Shirt for Men Full Sleeves </a></h3>
       <p>Currently available.</p>
       </div>
       <div class="shirt">
         <img src="img/shirt1.jpeg">
       </div>
      </div>


      <div class="fashion3">
       <div class="shirt">
         <img src="img/shirt1.jpeg">
       </div>
       <div class="con3">
        <h1><b>Tryme Fashion</b></h1>
        <h3><a href="products3.php"> Men's Cotton Casual White Shirt for Men Full Sleeves </a></h3>
       <p>Currently available.</p>
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
     <a color="white" href="#">Help</a>
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