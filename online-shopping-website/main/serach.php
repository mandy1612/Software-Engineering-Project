<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/demo1.css">
</head>
<body>
    <header>

    <div class="lside">
         <ul>
             <li ><a href="aflogin.php">Home</a></li>
            
            
            <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> <span calss= "badge badge-danger" width=15px style="background-color: red" id="cart-item"></span></a></li>
         </ul>
     </div>

     <?php
  include 'dbconn.php';
 
 if(isset($_POST['box'])){
  $serachq = $_POST['box'];
  $serachq = preg_replace("#[^0-9a-z] #i","",$serachq);

  $query = "select * from category where cat_name = $serachq";
  $results = mysqli_query($conn, $query);
  if (mysqli_num_rows($results) == 1){
    $output = 'there was no search results!';

  }else {

      $sql = "select pro_id, pro_title,pro_img,pro_keyword,img_click,pro_price,del_price,per from products where pro_desc like '%$serachq%' or pro_keyword like '%$serachq%' ";
      $result = $conn->query($sql);
 while($row= $result->fetch_assoc()){

        echo "
     <div class='text'>
        <h4>Sports Shoes</h4>
        <a href='{$row['img_click']}'> <h2 class='st'> {$row['pro_title'] }</h2></a>
        <h4 class='st2' size=2.9555>Currently available.</h4>
    </div>  

    <div class='text2'>
        <h2 class='tag'>₹ {$row['pro_price']} </h2>
        <del class='tag2'> ₹ {$row['del_price']}</del>
        <h4 class='tag3'>{$row['per']}% off</h4>
    </div>

        <div class='container'>
            <img src='{$row['pro_img']} ' width='375' height='375'>

            <div class='btn'>
            <div class='cart'>
              <form action='' class='form'>
                <input type='hidden' class='pid' value='{$row['pro_id']}'>
                <input type='hidden' class='pname' value=' {$row['pro_title']}'>
                <input type='hidden' class='pcode' value=' {$row['pro_keyword']}'>
                <input type='hidden' class='pimg' value='{$row['pro_img']}'>
                <input type='hidden' class='pprice' value=' {$row['pro_price']}'>
                <input type='hidden' class='pclick' value=' {$row['img_click']}'>
                
                <button class='add' ><i class='fa fa-cart-plus'></i> ADD TO CART</button>
              </form>
                
            </div>
            <div class='buy'>
            <form action='' class='submit'>
                <input type='hidden' class='pid' value=' {$row['pro_id']}'>
                <input type='hidden' class='pname' value=' {$row['pro_title']}'>
                <input type='hidden' class='pcode' value=' {$row['pro_keyword']}'>
                <input type='hidden' class='pimg' value=' {$row['pro_img']}'>
                <input type='hidden' class='pprice' value='{$row['pro_price']}'>
                <input type='hidden' class='pclick' value=' {$row['img_click']}'>
                
                <button onclick='window.location.href='payment.php'' class='buy'><i class='fa fa-bolt'></i> BUY NOW</button>
               
              </form>
              
               
            </div>
        </div>
            </div>";
            
 
 }
}
 }
 ?>
           
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

            <script type="text/javascript">
            $(document).ready(function(){
              $(".add").click(function(e){
                e.preventDefault();
                var $form = $(this).closest(".form");
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
