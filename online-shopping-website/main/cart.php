<?php include('action.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart System</title>
    <link rel="stylesheet" type="text/css" href="css/cart.css">
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <header>

    <div class="lside">
         <ul>
             <li ><a href="aflogin.php">Home</a></li>
            <li class="active"><a href="cart.php"><i class="fa fa-shopping-cart"></i> <span calss= "badge badge-danger" width=15px style="background-color: red" id="cart-item"></span></a></li>
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
                               <h4 class="text-center text-info m-0">Products in your cart!</h4>

                           </td>
                       </tr>
                       <tr>
                           <th>ID</th>
                           <th>Image</th>
                           <th>Name</th>
                           <th>Price</th>
                           <th>Quantity</th>
                           <th>Total price</th>
                           <th>
                               <a href="action.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure to clear your cart?');"><i class="fa fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
                           </th>
                       </tr>
                       </thead>
                       <tbody>
                           <?php
                            require 'dbconn.php';
                              $stmt = $conn->prepare("select * from cart where uid={$_SESSION['id']}");
                              $stmt->execute();
                              $result = $stmt->get_result();
                              $grand_total = 0;
                          
                              while($row = $result->fetch_assoc()):
                           ?>
                           <tr>
                               <td><?= $row['pro_id'] ?></td>

                               <input type="hidden" class="pid" value="<?=$row['pro_id']?>">

                               <td><img src="<?= $row['pro_img'] ?>" width="100"></td>
                               <td><a href="<?= $row['pro_click'] ?>"><?= $row['pro_title'] ?></a></td>
                               <td><?= number_format($row['pro_price'],2);?></td>

                               <input type="hidden" class="pprice" value="<?=$row['pro_price']?>">

                               <td><input type="number" class="form-control item" value="<?=$row['qty'] ?>" style="width:75px;"></td>
                               <td><?= number_format($row['total_price'],2);?></td>
                               <td>
                                   <a href="action.php?remove=<?= $row['pro_id'] ?>" class="text-danger" onclick="return confirm('Are you sure want to remove this item?');"><i class="fa fa-trash"></i></a>
                               </td>
                            </tr>
                            <?php $grand_total += $row['total_price'];?>
                            
                           <?php endwhile;?>
                           <tr>
                               <td colspan="3">
                                   <a href="aflogin.php" class="btn btn-success" ><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Continue Shopping</a>
                               </td>
                               <td colspan="2">
                                   <b>Grand Total</b>
                               </td>
                               <td>
                               <?= number_format($grand_total,2);?>
                               </td>
                               <td>
                               <a href="pay.php" class="btn btn-info <?= ($grand_total>1)?"":"disabled";?>"><i class=" fa fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
                               </td>
                           </tr>
                       </tbody>
                   </table>
               </div>
           </div>
       </div>

     </div>

    

            
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

            <script type="text/javascript">
            $(document).ready(function(){
             
                   $(".item").on('change',function(){
                       var $el = $(this).closest('tr');
                       var qty = $el.find(".item").val();
                       var pid = $el.find(".pid").val();
                       var pprice = $el.find(".pprice").val();
                       
                       location.reload(true);
                    
                       $.ajax({
                           url:'action.php',
                           method: 'post',
                           cache:false,
                           data: {pid:pid,pprice:pprice,qty:qty},
                           success:function(response){
                               console.log(response);
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
         
         
        </script>

    </header>
</body>
</html>        
