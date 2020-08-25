<?php include('action4.php') ?>



<!DOCTYPE html>
<html>
 <head>
     <title>

     </title>
     <link rel="stylesheet" type="text/css" href="css/products3.css">
     <link rel="icon" href="img/logo3.ico" type="image/ico">
 </head>
 <body>
     <header>
       
     <div class="lside">
         <ul>
             <li ><a href="aflogin.php">Home</a></li>
             <li><a href="wishlist.php">wishlist<span calss= "badge badge-danger" width=15px style="background-color: red" id="wishlist-item"></span></a></li>
           
            <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> <span calss= "badge badge-danger" width=15px style="background-color: red" id="cart-item"></span></a></li>
         </ul>
     </div>

    
     <?php
            include 'dbconn.php';
            $stmt = $conn->prepare("select * from products where pro_id=3");
            $stmt -> execute();
            $result = $stmt->get_result();
            while($row= $result->fetch_assoc()):
    ?>      

     <div class="text">
        <h4>Try This </h4>
        <h2 class="st">  <?=$row['pro_title']  ?></h2>
    </div>  

    <div class="text2">
        <h2 class="tag">₹<?= $row['pro_price'] ?></h2>
        <del class="tag2"> ₹<?= number_format($row['del_price'])?> </del>
        <h4 class="tag3"><?= ($row['per'])?>% off</h4>
    </div>
    <div class="text3">
        <ul>
        <li><h4>Closure: lace-up</h4></li>
        <li><h4>Shoe Width: Medium</h4></li>
        <li><h4> ☑️Material Type :- Canvas and Mesh/ Size-6,7,8,9,10✔️</h4></li>
        <li><h4> ☑️Design :- solid , trendy design , trendy look and optimal flaxibility✔️</h4></li>
        <li><h4> ☑️Occasion lifestyle :- casual/sneakers/canvas/sports/running/gym/training , special needs , ethnic and traditional , for any seasons Durable shoes, convenient material use✔️</h4></li>
        <li><h4> ☑️Specially designed for Indian Men's feet✔️</h4></li>
        <li><h4> ☑️Care Instructions: Rotate your pair of shoes once every other day, allowing them to de-odorize and retain their shapes, use shoe bags to prevent any stains or mildew, dust any dry dirt from the surface using a clean cloth, do not use polish or shiner✔️</h4></li>
        </ul>   
    </div>

    
        <div class="container">
            
            <input type="radio" name="img" id="one" checked>

            <input type="radio" name="img" id="two">

            <input type="radio" name="img" id="three">

              <div class="display-img">
             
              <form action="" class="form5">
                <input type="hidden" class="pid" value="<?= $row['pro_id']?>">
                <input type="hidden" class="pname" value="<?= $row['pro_title']?>">
                <input type="hidden" class="pcode" value="<?= $row['pro_keyword']?>">
                <input type="hidden" class="pimg" value="<?= $row['pro_img']?>">
                <input type="hidden" class="pprice" value="<?= $row['pro_price']?>">
                <input type="hidden" class="pclick" value="<?= $row['img_click']?>">
                
                <button class="heart1" ><a href="#" class="like">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                </a></button>
              </form>
              </div>

              <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script> 
$(document).ready(function(){
    $(".like").click(function(){
        $(this).toggleClass("heart");
    });
});

</script>

              <script> 
                    let btnhe = document.querySelector('#he');

                    btnhe.addEventListener('click',()=>btnhe.style.backgroundColor='red')

            </script>
        </div>

          
        <div class="btn">
        <div class="cart">
              <form action="" class="form-submit">
                <input type="hidden" class="pid" value="<?= $row['pro_id']?>">
                <input type="hidden" class="pname" value="<?= $row['pro_title']?>">
                <input type="hidden" class="pcode" value="<?= $row['pro_keyword']?>">
                <input type="hidden" class="pimg" value="<?= $row['pro_img']?>">
                <input type="hidden" class="pprice" value="<?= $row['pro_price']?>">
                <input type="hidden" class="pclick" value="<?= $row['img_click']?>">
                
                <button class="add" ><i class="fa fa-cart-plus"></i> ADD TO CART</button>
              </form>
                
            </div>
            <div class="buy">
            <form action="" class="submit">
                <input type="hidden" class="pid" value="<?= $row['pro_id']?>">
                <input type="hidden" class="pname" value="<?= $row['pro_title']?>">
                <input type="hidden" class="pcode" value="<?= $row['pro_keyword']?>">
                <input type="hidden" class="pimg" value="<?= $row['pro_img']?>">
                <input type="hidden" class="pprice" value="<?= $row['pro_price']?>">
                <input type="hidden" class="pclick" value="<?= $row['img_click']?>">
                
                <button onclick="window.location.href='payment.php'" class="buy"><i class="fa fa-bolt"></i> BUY NOW</button>
              </form>
              
               
            </div>
        </div>
        <?php endwhile;?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

            <script type="text/javascript">
            $(document).ready(function(){
              $(".add").click(function(e){
                e.preventDefault();
                var $form = $(this).closest(".form-submit");
                var pid = $form.find(".pid").val();
                var pname = $form.find(".pname").val();
                var pcode = $form.find(".pcode").val();
                var pimg = $form.find(".pimg").val();
                var pprice = $form.find(".pprice").val();
                var pclick = $form.find(".pclick").val();
                
                $.ajax({
                  url: 'action.php',
                  method:'post',
                  data: {pid:pid,pname:pname,pcode:pcode,pimg:pimg,pprice:pprice,pclick:pclick},
                  success:function(response){
                  
                   load_cart_item_number();
                  }
                });
              });

              load_cart_item_number();

              function load_cart_item_number(){
                $.ajax({
                  url:'action.php',
                  method:'get',
                  data: {cartItem:"cart_item"},
                  success:function(response){
                    $("#cart-item").html(response);
                  }
                });
              }
            });


            $(".buy").click(function(e){
                e.preventDefault();
                var $form = $(this).closest(".submit");
                var pid = $form.find(".pid").val();
                var pname = $form.find(".pname").val();
                var pcode = $form.find(".pcode").val();
                var pimg = $form.find(".pimg").val();
                var pprice = $form.find(".pprice").val();
                var pclick = $form.find(".pclick").val();
                
                $.ajax({
                  url: 'action2.php',
                  method:'post',
                  data: {pid:pid,pname:pname,pcode:pcode,pimg:pimg,pprice:pprice,pclick:pclick},
                  success:function(response){
                
                  }
                });
              });

              $(".heart1").click(function(e){
                e.preventDefault();
                var $form = $(this).closest(".form5");
                var pid = $form.find(".pid").val();
                var pname = $form.find(".pname").val();
                var pcode = $form.find(".pcode").val();
                var pimg = $form.find(".pimg").val();
                var pprice = $form.find(".pprice").val();
                var pclick = $form.find(".pclick").val();
                
                $.ajax({
                  url: 'action5.php',
                  method:'post',
                  data: {pid:pid,pname:pname,pcode:pcode,pimg:pimg,pprice:pprice,pclick:pclick},
                  success:function(response){
                    load_cart_item_number2();
                  }
                });
              });

              load_cart_item_number2();

function load_cart_item_number2(){
  $.ajax({
    url:'action5.php',
    method:'get',
    data: {wishlistItem:"wishlist_item"},
    success:function(response){
      $("#wishlist-item").html(response);  
    }
  });
}




            

        </script>


<div class="midcon">
        <h3 class="rp">RELATED PRODUCTS</h3>
        </div>

        <div class="fashion">
        <?php
            include 'dbconn.php';
            $stmt = $conn->prepare("select * from products where pro_id=1");
            $stmt -> execute();
            $result = $stmt->get_result();
            while($row= $result->fetch_assoc()):
    ?>   
   <div class="lblock">
       <div class="shirt">
       <form action="" class="form3">
                <input type="hidden" class="pid" value="<?= $row['pro_id']?>">
                <input type="hidden" class="pname" value="<?= $row['pro_title']?>"> <input type="hidden" class="pcode" value="<?= $row['pro_keyword']?>">
                <input type="hidden" class="pimg" value="<?= $row['pro_img']?>">
                <input type="hidden" class="pprice" value="<?= $row['pro_price']?>">
                <input type="hidden" class="pclick" value="<?= $row['img_click']?>">
                <button class="st5" onclick="window.location.href='<?=$row['img_click']?>';">  <img src="<?=$row['pro_img']?>" ></button>
                
              </form>
       </div>
       <div class="sname">
       <font size=4><b><?= $row['pro_keyword'] ?></b></font>
       </div>
       <div class="slink">
       <form action="" class="form3">
                <input type="hidden" class="pid" value="<?= $row['pro_id']?>">
                <input type="hidden" class="pname" value="<?= $row['pro_title']?>"> <input type="hidden" class="pcode" value="<?= $row['pro_keyword']?>">
                <input type="hidden" class="pimg" value="<?= $row['pro_img']?>">
                <input type="hidden" class="pprice" value="<?= $row['pro_price']?>">
                <input type="hidden" class="pclick" value="<?= $row['img_click']?>">
                <button class="st5" onclick="window.location.href='<?=$row['img_click']?>';"> <h2 class="st"> <?=$row['pro_title']  ?></h2></button>
                
              </form>
       </div>
       <div class="suna">
       <font size=2.9555>Currently available.</font>
       </div>
   </div>
   <?php endwhile;?>

   <?php
            include 'dbconn.php';
            $stmt = $conn->prepare("select * from products where pro_id=2");
            $stmt -> execute();
            $result = $stmt->get_result();
            while($row= $result->fetch_assoc()):
    ?>   

   <div class="cblock">
       <div class="shirt">
       <form action="" class="form3">
                <input type="hidden" class="pid" value="<?= $row['pro_id']?>">
                <input type="hidden" class="pname" value="<?= $row['pro_title']?>"> <input type="hidden" class="pcode" value="<?= $row['pro_keyword']?>">
                <input type="hidden" class="pimg" value="<?= $row['pro_img']?>">
                <input type="hidden" class="pprice" value="<?= $row['pro_price']?>">
                <input type="hidden" class="pclick" value="<?= $row['img_click']?>">
                <button class="st5" onclick="window.location.href='<?=$row['img_click']?>';">  <img src="<?=$row['pro_img']?>" ></button>
                
              </form>
       </div>
       <div class="sname">
       <font size=4><b><?= $row['pro_keyword'] ?></b></font>
       </div>
       <div class="slink">
       <form action="" class="form3">
                <input type="hidden" class="pid" value="<?= $row['pro_id']?>">
                <input type="hidden" class="pname" value="<?= $row['pro_title']?>"> <input type="hidden" class="pcode" value="<?= $row['pro_keyword']?>">
                <input type="hidden" class="pimg" value="<?= $row['pro_img']?>">
                <input type="hidden" class="pprice" value="<?= $row['pro_price']?>">
                <input type="hidden" class="pclick" value="<?= $row['img_click']?>">
                <button class="st5" onclick="window.location.href='<?=$row['img_click']?>';"> <h2 class="st"> <?=$row['pro_title']  ?></h2></button>
                
              </form>
       </div>
       <div class="suna">
       <font size=2.9555>Currently available.</font>
       </div>
   </div>
   <?php endwhile;?>

   <?php
            include 'dbconn.php';
            $stmt = $conn->prepare("select * from products where pro_id=4");
            $stmt -> execute();
            $result = $stmt->get_result();
            while($row= $result->fetch_assoc()):
    ?>   

   <div class="rblock">
       <div class="shirt">
       <form action="" class="form3">
                <input type="hidden" class="pid" value="<?= $row['pro_id']?>">
                <input type="hidden" class="pname" value="<?= $row['pro_title']?>"> <input type="hidden" class="pcode" value="<?= $row['pro_keyword']?>">
                <input type="hidden" class="pimg" value="<?= $row['pro_img']?>">
                <input type="hidden" class="pprice" value="<?= $row['pro_price']?>">
                <input type="hidden" class="pclick" value="<?= $row['img_click']?>">
                <button class="st5" onclick="window.location.href='<?=$row['img_click']?>';">  <img src="<?=$row['pro_img']?>" ></button>
                
              </form>
       </div>
       <div class="sname">
       <font size=4><b><?= $row['pro_keyword'] ?></b></font>
       </div>
       <div class="slink">
       <form action="" class="form3">
                <input type="hidden" class="pid" value="<?= $row['pro_id']?>">
                <input type="hidden" class="pname" value="<?= $row['pro_title']?>"> <input type="hidden" class="pcode" value="<?= $row['pro_keyword']?>">
                <input type="hidden" class="pimg" value="<?= $row['pro_img']?>">
                <input type="hidden" class="pprice" value="<?= $row['pro_price']?>">
                <input type="hidden" class="pclick" value="<?= $row['img_click']?>">
                <button class="st5" onclick="window.location.href='<?=$row['img_click']?>';"> <h2 class="st"> <?=$row['pro_title']  ?></h2></button>
                
              </form>
       </div>
       <div class="suna">
       <font size=2.9555>Currently available.</font>
       </div>
   </div>
   <?php endwhile;?>
   </div>


   <div class="midcon">
     <h3 class="rp">Recently Viewed</h3>
   </div>

   <?php
                               require 'dbconn.php';
                               $stmt = $conn->prepare("select * from products natural join view where uid={$_SESSION['id']} ORDER BY id DESC LIMIT 8");
                               $stmt->execute();
                               $result = $stmt->get_result();
                              
                               while($row = $result->fetch_assoc()):
                            ?>

                            
       

   <div class="mid">
       <div class="img">
      

       <form action="" class="form3">
                <input type="hidden" class="pid" value="<?= $row['pro_id']?>">
                <input type="hidden" class="pname" value="<?= $row['pro_title']?>"> <input type="hidden" class="pcode" value="<?= $row['pro_keyword']?>">
                <input type="hidden" class="pimg" value="<?= $row['pro_img']?>">
                <input type="hidden" class="pprice" value="<?= $row['pro_price']?>">
                <input type="hidden" class="pclick" value="<?= $row['img_click']?>">
                <button class="st5" onclick="window.location.href='<?=$row['img_click']?>';">  <img src="<?=$row['pro_img']?>" width="300" height="300"></button>
                
              </form>
       </div>
       <div class="co2"> 
       <font size=4><b><?= $row['pro_keyword'] ?></b></font>
       </div>
       <div class="li">
       <form action="" class="form3">
                <input type="hidden" class="pid" value="<?= $row['pro_id']?>">
                <input type="hidden" class="pname" value="<?= $row['pro_title']?>"> <input type="hidden" class="pcode" value="<?= $row['pro_keyword']?>">
                <input type="hidden" class="pimg" value="<?= $row['pro_img']?>">
                <input type="hidden" class="pprice" value="<?= $row['pro_price']?>">
                <input type="hidden" class="pclick" value="<?= $row['img_click']?>">
                <button class="st5" onclick="window.location.href='<?=$row['img_click']?>';"> <h2 class="st"> <?=$row['pro_title']  ?></h2></button>
                
              </form>
       </div>
       <div class="c2">
    <font size=2.9555>Currently available.</font>
     </div>
     </div>

   
<?php endwhile;?>





<script type="text/javascript">
            $(document).ready(function(){



              $(".st5").on('click', function(e) {
                e.preventDefault();
                var $form = $(this).closest(".form3");
                var pid = $form.find(".pid").val();
                var pname = $form.find(".pname").val();
                var pcode = $form.find(".pcode").val();
                var pimg = $form.find(".pimg").val();
                var pprice = $form.find(".pprice").val();
                var pclick = $form.find(".pclick").val();
                
                $.ajax({
                  url: 'action4.php',
                  method:'post',
                  data: {pid:pid,pname:pname,pcode:pcode,pimg:pimg,pprice:pprice,pclick:pclick},
                  success:function(response){
                
                  }
                });
              });
            });
            

        </script>
  
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
