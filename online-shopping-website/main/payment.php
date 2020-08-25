
<?php include('action2.php') ?>


<link rel="stylesheet" type="text/css" href="css/checkout1.css">
 <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

 <div class="lside">
         <ul>
             <li ><a href="home.php">Home</a></li>
         </ul>
     </div>

 <h4 class="text-center text-info p-2">Complete your order!</h4>
 <div class="container">
       <div class="row justify-content-center">
           <div class="col-lg-10">
               <div class="table-responsive mt-2">
                   <table class="table table-bordered table-striped text-center">
                       <thead>
                     
                       <tr>
                           <th>ID</th>
                           <th>Image</th>
                           <th>Name</th>
                           <th>Price</th>
                           <th>Quantity</th>
                           <th>Total price</th>
                           <th>
                               <a href="action2.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure to clear your cart?');"><i class="fa fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
                           </th>
                           
                          
                       </tr>
                       </thead>
                       <tbody>

                    <?php
                              require 'dbconn.php';
                             
                              $stmt = $conn->prepare("select * from buy where uid={$_SESSION['id']}");
                             
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
                                   <a href="action2.php?remove=<?= $row['pro_id'] ?>" class="text-danger" onclick="return confirm('Are you sure want to remove this item?');"><i class="fa fa-trash"></i></a>
                               </td>
                            </tr>
                            <?php $grand_total += $row['total_price'];?>
                           <?php endwhile;?>
                           <tr>
                              
                               <td colspan="5">
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Grand Total</b>
                                
                               </td>
                               <td>
                               <?= number_format($grand_total,2);?>
                               </td>
                               
                           </tr>
                       </tbody>
                   </table>
               </div>
           </div>
       </div>

  <div class="order">
        <form action="payment.php" method="post">
        <?php include('errors.php'); ?>
            
        <?php
    
    require 'dbconn.php';
    $grand_total2=0;
  $allItems= '';
  $items = array();
  $items2=array();
  $pro_img='';
         $sql = "select concat(pro_title,'(',qty,')') as ItemQty,
         total_price,pro_img,pro_id from buy";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
         $result = $stmt->get_result();
         while($row = $result->fetch_assoc()){
             $grand_total2 +=$row['total_price'];
             $items[] = $row['ItemQty'];
             $items2[]=$row['pro_img'];
            
         }
         $allItems= implode(",",$items);
         $pro_img=implode(",",$items2);
           ?>
           
            <input type="hidden"  name="pro_img" value="<?= $pro_img?>">
           <input type="hidden"  name="products" value="<?= $allItems?>">
           <input type="hidden" name="total" value="<?= $grand_total2?>">
           
         
       <div class="tab2">
       <h2>Step 1: addresss</h2>
	
       <input type="text" class="name" name="name" placeholder="name" required>
                 <input type="text" class="name2" name="phonenumber" placeholder="98745****" pattern="\d{10}" maxlength="10" required>
                 <input type="text" class="pin" name="pincode" placeholder="pincode" required maxlength="6">
                 <input type="text" class="pin2" name="locality" placeholder="Locality" required>
                 
                 <textarea class="add" name="address" placeholder="Address (Area and Street)" required></textarea> 
                 <input type="email" placeholder="Email" name="email" value="" required class="email">
                 <input type="text" class="city" name="city" placeholder="City/District/Town" required>
                 <div class="custom" style="width:200px;" >
                   <select name="state" required>
                   <option value="0">select state:</option>
                  <option value="Andra Pradesh">Andra Pradesh</option>
                  <option value="Bihar">Bihar</option>
                  <option value="Chhattisgarh">Chhattisgarh</option>
                  <option value="Goa">Goa</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                  <option value="Maharashtra">Maharashtra</option>
                  <option value="Rajasthan">Rajasthan</option>
                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                  
              </select>
              </div>
                 
                 <h4 class="adt">Address Type</h4>
                 <label class="container3" >Home (All day delivery)
                  <input type="radio" checked="checked" name="radio" value="Home (All day delivery)">
                  <span class="checkmark"></span>
                  </label>
                  <label class="container3">Work (Delivery between 10 AM-5 PM)
                  <input type="radio" name="radio" value="Work (Delivery between 10 AM-5 PM)">
                  <span class="checkmark"></span>
                  </label>

       </div>
 

 <div class="tab3">
 <h2>Step 2: Payment Method</h2>
	
    <label class="container2">UPI
                    <input type="radio" checked="checked" name="radio2" value="UPI">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container2">PhonePe
                    <input type="radio" name="radio2" value="PhonePe" >
                    <span class="checkmark"></span>
                    </label>
                    <label class="container2">Credit/Debit/ATM Card
                    <input type="radio" name="radio2" value="Credit/Debit/ATM Card" >
                    <span class="checkmark"></span>
                    </label>
                    <label class="container2">Net Banking
                    <input type="radio" name="radio2" value="Net Banking" >
                    <span class="checkmark"></span>
                    </label>
                    <label class="container2">Cash On Delivery
                    <input type="radio" name="radio2" value="Cash On Delivery" >
                    <span class="checkmark"></span>
                    </label>

        
	

	<input type="submit" name="submit" class="submit btn btn-success" value="Order Place" />
	</fieldset>
    </form>		
    
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
                           url:'action2.php',
                           method: 'post',
                           cache:false,
                           data: {pid:pid,pprice:pprice,qty:qty},
                           success:function(response){
                               console.log(response);
                           }

                       });
                   });
            });
         
         
        </script>


<div>
    <p></p>
</div>