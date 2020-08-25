<?php include('action5.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping wishlist</title>
    <link rel="stylesheet" type="text/css" href="css/wishlist.css">
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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

     .st{
        margin-top: 6px;
        font-size: 16px;
    }

    .slink button{
        border: none;
         background-color: inherit;
         cursor: pointer;
         display: inline-block;
       }
   
       .shirt button{
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
             <li ><a href="aflogin.php">Home</a></li>
            <li class="active"><a href="wishlist.php">wishlist <span calss= "badge badge-danger" width=15px style="background-color: red" id="wishlist-item"></span></a></li>
         </ul>
     </div>


     <div class="container">
       <div class="row justify-content-center">
           <div class="col-lg-10">
               <div class="table-responsive mt-2">
                   <table class="table table-bordered table-striped text-center">
                       <thead>
                       <tr>
                           <td colspan="7">
                               <h4 class="text-center text-info m-0"> your wishlist!</h4>

                           </td>
                       </tr>
                       <tr>
                           <th>pro_img</th>
                           <th>product name</th>
                           <th>product price</th>
                           <th>type of product</th>
                           <th>date</th>
                           <th>
                               <a href="action5.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure to clear your wishlist?');"><i class="fa fa-trash"></i>&nbsp;&nbsp;Clear wishlist</a>
                           </th>

                           
                          
                       </tr>
                       </thead>
                       <tbody>
                           <?php
                            require 'dbconn.php';
                            $items2=array();
                            $pro_img='';
                              $stmt = $conn->prepare("select * from products natural join wishlist where uid={$_SESSION['id']}");
                              $stmt->execute();
                              $result = $stmt->get_result();
                              $grand_total = 0;
                          
                              while($row = $result->fetch_assoc()):
                                $items2[]=$row['pro_img'];
                           ?>
                           <?php $pro_img=implode(",",$items2);?>
                           <tr>
                           <td> 
                             <div class="shirt"><form action="" class="form3">
                <input type="hidden" class="pid" value="<?= $row['pro_id']?>">
                <input type="hidden" class="pname" value="<?= $row['pro_title']?>"> 
                <input type="hidden" class="pcode" value="<?= $row['pro_keyword']?>">
                <input type="hidden" class="pimg" value="<?= $row['pro_img']?>">
                <input type="hidden" class="pprice" value="<?= $row['pro_price']?>">
                <input type="hidden" class="pclick" value="<?= $row['img_click']?>">
                <button class="st5" onclick="window.location.href='<?=$row['img_click']?>';">  <img src="<?=$row['pro_img']?>" width="100px" ></button>
                
              </form></div></td>
                           <td> <div class="slink"><form action="" class="form3">
                <input type="hidden" class="pid" value="<?= $row['pro_id']?>">
                <input type="hidden" class="pname" value="<?= $row['pro_title']?>">
                 <input type="hidden" class="pcode" value="<?= $row['pro_keyword']?>">
                <input type="hidden" class="pimg" value="<?= $row['pro_img']?>">
                <input type="hidden" class="pprice" value="<?= $row['pro_price']?>">
                <input type="hidden" class="pclick" value="<?= $row['img_click']?>">
                <button class="st5" onclick="window.location.href='<?=$row['img_click']?>';"> <h2 class="st"> <?=$row['pro_title']  ?></h2></button>
                
              </form></div></td>
                               <td><?= $row['pro_price'] ?></td>
                               <td><?= $row['pro_keyword'] ?></td>
                               <td><?= $row['time'] ?></td>
                               <td>
                                   <a href="action5.php?remove=<?= $row['pro_id'] ?>" class="text-danger" onclick="return confirm('Are you sure want to remove this item?');"><i class="fa fa-trash"></i></a>
                               </td>
                              
                            
                           <?php endwhile;?>
                          

                                
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
    

            
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

            <script type="text/javascript">
            $(document).ready(function(){
             
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
            
        </script>

    </header>
</body>
</html>        
