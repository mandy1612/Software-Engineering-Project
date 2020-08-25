
<?php include('action4.php') ?>

<!DOCTYPE html>
<html>
 <head>
     <title>

     </title>
     <link rel="icon" href="img/logo3.ico" type="image/ico">
 </head>

  <style> 

@import "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
*{
    padding: 0;
    margin: 0;
   
}

    .lside {
        margin-left: 1200px;
        display: flex;
      }

    .lside  ul{
        float: right;
        list-style-type: none;
        margin-top: 20px;
    }
    
   .lside ul li{
       display: inline-block; 
      
    }
    
   .lside ul li a{
        text-decoration: none;
        color:black;
        padding: 5px 20px;
        border: 1px solid transparent;
        transition: 0.6s ease 0s;
        position: relative;
    }
    
   .lside ul li a:hover{
        background-color:black;
        color: #fff;
    }
    
   .lside ul li.active a{
        background-color: black;
        color: white;
    }

.container {
    width: 100%;
    height: 610px;
    border: 1px solid white;
    padding: 10px;
    margin-top: 50px;
}

.text{
    position: absolute;
    margin-left: 900px;
    margin-top: 60px;
}

.text .st{
    margin-top: 6px;
}

.text2{
    position: absolute;
    margin-left: 900px;
    margin-top: 130px;
    display: flex;
    justify-content: space-between;
}

.text2 .tag{
    float: left;
    margin-left: 10px;
}
.text2 .tag2{
    float: center;
    margin-left: 15px;
    margin-top: 5px;
    color: slategray;

}
.text2 .tag3{
    float: right;
    margin-left: 25px;
    margin-top: 5px;
    color: green;
}

.text3{
    position: absolute;
    margin-left: 900px;
    margin-top: 180px;
    color: dimgray;
}

 .text3 li{
    justify-content: space-evenly;
    margin-top: 15px;
}

.color{
    position: absolute;
    margin-left: 900px;
    margin-top: 550px;
    display: flex;
}

.cir{
    margin-top: 20px;
}
 
.dot {
    height: 25px;
    width: 25px;
    background-color: brown;
    border-radius: 50%;
    display: inline-block;
    margin-left: 30px;
    cursor: pointer;
  }

  .dot2 {
    height: 25px;
    width: 25px;
    background-color: slateblue;
    border-radius: 50%;
    display: inline-block;
    cursor: pointer;
  }
  .dot3 {
    height: 25px;
    width: 25px;
    background-color: darkcyan;
    border-radius: 50%;
    display: inline-block;
    cursor: pointer;
  }

  .size{
    position: absolute;
    margin-left: 900px;
    margin-top: 550px;
    display: flex;
  }

  .size .btns{
      margin-left: 30px;
      width: 15px;
      height: 10px;
  }

  .size .btns button{
    width: 30px;
    height: 30px;
    cursor: pointer;
}
.size .btnm button{
    width: 30px;
    height: 30px;
    cursor: pointer;
}
.size .btnl button{
    width: 30px;
    height: 30px;
    cursor: pointer;
}
.size .btnxl button{
    width: 30px;
    height: 30px;
    cursor: pointer;
}

  .size .btnm{
    margin-left: 30px;
    width: 15px;
    height: 10px;
}
.size .btnl{
    margin-left: 30px;
    width: 15px;
    height: 10px;
}
.size .btnxl{
    margin-left: 30px;
    width: 15px;
    height: 10px;
}



input[type="radio"]{
    width: 175px;
    height: 130px;
    border: 1px solid white;
    display: block;
    -webkit-appearance: none;
    margin-top: 15px;
    cursor: pointer;
}

.display-img{
    width: 600px;
    height: 600px;
    border: 1px solid white;
    position: absolute;
    top: 100px;
    left: 200px;
    background-size: cover;

}


#one{background-image: url(img/Men_T-shirt_4b.jpg);background-size: cover; }

#two{background-image: url(img/Men_T-shirt_4c.jpg); background-size: cover;}



#one:checked ~ .display-img{
    background-image: url(img/Men_T-shirt_4b.jpg) ;
}

#two:checked ~ .display-img{
    background-image: url(img/Men_T-shirt_4c.jpg);
}

.btn{
    margin-top: 10px;
    float: left;
    justify-content: space-evenly;
    display: flex;
    position: absolute;
    
}
.btn .cart{
    float: left;
    margin-left: 200px;
}

.btn .cart button{
    cursor: pointer;
    color:black;
    height: 50px;
    width: 200px;
    background-color: orange;

}
 
.btn .buy{
    float: right;
    margin-left: 10px;
}

.btn .buy button{
    cursor: pointer;
    color:black;
    height: 50px;
    width: 200px;
    background-color: orangered;

}

.midcon{
    float: center;
    margin-top: 130px;
    display: block;

}

.midcon .rp{
  margin-left: 700px;
  color: black
}
 
.fashion{
    position: relative;
     top: 50%;
     left: 50%;
     transform: translate(-50%,10%);
     display: flex;
     justify-content: space-between;
     max-width: 1600px;
     transition: 0.6s ease 0s;
   }


.fashion .shirt{
    display: flex;
  
  }

  .fashion .shirt img{
    width: 400px;
    height: 400px;
  }

  .fashion .sname{
    margin-left: 130px;
    margin-top: 5px;
    color: black;
  }
  
  .fashion .slink{
    text-align: center;
    margin-top: 5px; 
    width: 320px; 
    margin-left: 22px;
  }
  
  .fashion .slink a{
    text-decoration: none;
    color: black;
  }
  
  .fashion .suna{
    margin-left: 130px;
    margin-top: 5px;
    color: darkslategray;
  }

  .last{
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%,40%);
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
      transform: translate(-50%,180%);
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

    .mid{
        display:inline-block;
        justify-content: space-between;
        background-color:white;
        margin-left: 30px;
        margin-top: 50px;
      }
      
    
    .mid .img{
      cursor: pointer;
     border: 0px;
    
    }
    
    .mid .co2{
      margin-left: 130px;
      margin-top: 5px;
      color: black;
    }
    
    .mid .li{
      text-align: center;
      margin-top: 5px; 
      width: 320px; 
      margin-left: 22px;
    }
    
    .mid .li a{
      text-decoration: none;
      color: black;
    }
    
    .mid .c2{
      margin-left: 125px;
      margin-top: 5px;
      color: darkslategray;
    }

    .heart1{
        margin-top: 10px;
        float: right;
    }

   .display-img  button{
        margin-top: 10px;
        margin-left: 95px;
        height: 30px;
        width: 30px;
        border-radius: 50%;
        border-color:white;
        margin-right: 10px;
        border:  solid #fff;
        cursor: pointer;
          
    }

    .heart1 a{
        color: #00000030;
        text-decoration: none;
        font-size: 1.5em;
    }
    
    .heart i.fa-heart{
        color: #f44336;
    }
  


    .st5{
        margin-top: 10px;

    }

    .slink button{
     border: none;
      background-color: inherit;
      cursor: pointer;
      font-size: 12px;
      display: inline-block;
    }

    .shirt button{
        border: none;
        background-color: inherit;
        font-size: 16px;
        cursor: pointer;
        display: inline-block;
     }

     .li button{
        border: none;
         background-color: inherit;
         cursor: pointer;
         font-size: 12px;
         display: inline-block;
       }

       
    .img button{
        border: none;
        background-color: inherit;
        font-size: 16px;
        cursor: pointer;
        display: inline-block;
     }





</style>

 <body>
     <header>
       
     <div class="lside">
         <ul>
             <li ><a href="home.php">Home</a></li>
            
             <li><a href="wishlist.php">wishlist<span calss= "badge badge-danger" width=15px style="background-color: red" id="wishlist-item"></span></a></li>

            <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> <span calss= "badge badge-danger" width=15px style="background-color: red" id="cart-item"></span></a></li>
         </ul>
     </div>
     <?php
            include 'dbconn.php';
            $stmt = $conn->prepare("select * from products where pro_id=12");
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
        <li><h4> Size Guide : X-SMALL (36),SMALL(38),MEDIUM(40),LARGE(42),X-LARGE(44),XX-LARGE(46)</h4></li>
        <li><h4> Fit: Regular Fit</h4></li>
        <li><h4> Wash Care: Do Not Iron on Print, Dry in Shade, Do Not Bleach, Machine Wash Warm at 40°C</h4></li>
        <li><h4> Sleeve : long sleeve</h4></li>
      </ul>   
    </div>

     

        <div class="container">
            
            <input type="radio" name="img" id="one" checked>

            <input type="radio" name="img" id="two">
           

           

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
            $stmt = $conn->prepare("select * from products where pro_id=9");
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
            $stmt = $conn->prepare("select * from products where pro_id=10");
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
            $stmt = $conn->prepare("select * from products where pro_id=11");
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
