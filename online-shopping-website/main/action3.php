<?php 
require 'dbconn.php';
session_start();
if (isset($_SESSION["id"])) {
    $uid = $_SESSION['id'];

$errors = array(); 

if(isset($_POST['pid'])){
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $pcode = $_POST['pcode'];
    $pimg = $_POST['pimg'];
    $pprice = $_POST['pprice'];
    $pclick = $_POST['pclick'];
    
    $pqty = 1;

    $stmt = $conn->prepare("select pro_title from cart where pro_title=?");
    $stmt->bind_param("s",$pname);
    $stmt->execute();
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();
   $code = $r['pro_title'];

   if(!$code){
       $query = $conn->prepare("insert into buy(pro_id,pro_title,pro_keyword,pro_img,qty,total_price,pro_price,pro_click) values(?,?,?,?,?,?,?,?)");
       $query->bind_param("isssisss",$pid,$pname,$pcode,$pimg,$pqty,$pprice,$pprice,$pclick);
       $query->execute();
       echo "<script>javascript: alert('Item  added in your cart ')></script>";
   }
   else{
    echo "Item already added in your cart";
   }

  

}

if(isset($_GET['remove'])){
    $pro_id = $_GET['remove'];
    $stmt = $conn->prepare("delete from cart where pro_id=?");
    $stmt->bind_param("i",$pro_id);
    $stmt->execute();
    $_SESSION['showAlert']='block';
    $_SESSION['message']='Item removed from the cart!';
    header('location:pay.php');
}


 if(isset($_GET['clear'])){
    $stmt = $conn->prepare("delete from cart");  
    $stmt->execute();
    $_SESSION['showAlert']='block';
    $_SESSION['message']=' all Item removed from the cart!';
    header('location:home.php');

 }


 if(isset($_POST['qty'])){
    $qty = $_POST['qty'];
    $pid = $_POST['pid'];
    $pprice = $_POST['pprice'];
    
     $tprice = $qty*$pprice;

     $stmt = $conn->prepare("update cart set qty=?,total_price=? where pro_id=?");
     $stmt->bind_param("isi",$qty,$tprice,$pid);
     $stmt->execute();

 }

 

  if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
    $pincode = mysqli_real_escape_string($conn, $_POST['pincode']);
    $locality = mysqli_real_escape_string($conn, $_POST['locality']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $radio = mysqli_real_escape_string($conn, $_POST['radio']);
   
    $total = mysqli_real_escape_string($conn, $_POST['total']);
    $radio2 = mysqli_real_escape_string($conn, $_POST['radio2']);
    $products = mysqli_real_escape_string($conn, $_POST['products']);
    $pro_img = mysqli_real_escape_string($conn, $_POST['pro_img']);
     
    if (count($errors) == 0){
        $sql = "insert into orders(name,phonenumber,pincode,locality,address,city,state,add_type,total,payment,products,email,uid,pro_img) values('$name','$phonenumber','$pincode','$locality','$address','$city','$state','$radio','$total','$radio2','$products','$email','$uid','$pro_img')";
        $sql2="insert into display(pro_id,uid) select pro_id,uid from cart";
        $sql4="delete from cart where uid={$_SESSION['id']}"; 
        $sql3="insert into orders_products(uid,total,order_id) select uid,total,id from orders";
       
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            header('location: pay2.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        if (mysqli_query($conn, $sql2)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
        }
        if (mysqli_query($conn, $sql3)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
        }
        if (mysqli_query($conn, $sql4)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
        }
       
      }
      
      
    }
    }




?>