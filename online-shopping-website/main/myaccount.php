<?php include('dbconn.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title>Myaccount</title>
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

     <?php
session_start();
  $sql = "select * from user where uid={$_SESSION['id']}";
  $result = $conn->query($sql);
while($row= $result->fetch_assoc()){

    echo"
      <div><h4>userid: {$row['uid']}</h4></div>
     <div><h4>username : {$row['username']} </h4></div>
      <div><h4>phonenumber:  {$row['phonenumber']} </h4></div>
      <div> <h4>email: {$row['email']} </h4> </div>
       <div><h4>fisrtname:  {$row['firstname']} </h4></div>
       <div><h4>lastname:  {$row['lastname']} </h4></div>

       ";
}
       ?>



     <div class="container">
       <div class="row justify-content-center">
           <div class="col-lg-10">
               <div class="table-responsive mt-2">
                   <table class="table table-bordered table-striped text-center">
                       <thead>
                       <tr>
                           <td colspan="7">
                               <h4 class="text-center text-info m-0"> previous orders!</h4>

                           </td>
                       </tr>
                       <tr>
                           <th>pro_img</th>
                           <th>product name</th>
                           <th>product price</th>
                           <th>type of product</th>
                           <th>date</th>

                           
                          
                       </tr>
                       </thead>
                       <tbody>
                           <?php
                            require 'dbconn.php';
                            $items2=array();
                            $pro_img='';
                              $stmt = $conn->prepare("select * from products natural join display where uid={$_SESSION['id']}");
                              $stmt->execute();
                              $result = $stmt->get_result();
                              $grand_total = 0;
                          
                              while($row = $result->fetch_assoc()):
                                $items2[]=$row['pro_img'];
                           ?>
                           <?php $pro_img=implode(",",$items2);?>
                           <tr>
                           <td><img src="<?=$row['pro_img'] ?>" width="100px"></td>
                           <td><a href="<?= $row['img_click'] ?>"><?= $row['pro_title'] ?></a></td>
                               <td><?= $row['pro_price'] ?></td>
                               <td><?= $row['pro_keyword'] ?></td>
                               <td><?= $row['time'] ?></td>
                              
                            
                           <?php endwhile;?>
                          

                                
                       </tbody>
                   </table>
               </div>
           </div>
       </div>

     </div>
