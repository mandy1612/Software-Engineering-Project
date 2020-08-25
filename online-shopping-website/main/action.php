<?php 
require 'dbconn.php';

session_start();
if (isset($_SESSION["id"])) {
    $uid = $_SESSION['id'];
if(isset($_POST['pid'])){
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $pcode = $_POST['pcode'];
    $pimg = $_POST['pimg'];
    $pprice = $_POST['pprice'];
    $pclick = $_POST['pclick'];
    
    $pqty = 1;

    $stmt = $conn->prepare("select pro_title,uid from cart where pro_title=? and uid={$_SESSION['id']}");
    $stmt->bind_param("s",$pname);
    $stmt->execute();
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();
   $code = $r['pro_title'];

   if(!$code){
       $query = $conn->prepare("insert into cart(pro_id,pro_title,pro_keyword,pro_img,qty,total_price,pro_price,pro_click,uid) values(?,?,?,?,?,?,?,?,?)");
       $query->bind_param("isssisssi",$pid,$pname,$pcode,$pimg,$pqty,$pprice,$pprice,$pclick,$uid);
       $query->execute();
       echo "<script>javascript: alert('Item  added in your cart ')></script>";
   }
   else{
    echo "Item already added in your cart";
   }


}

if(isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item'){
    $stmt = $conn->prepare("select * from cart where uid={$_SESSION['id']}");
    $stmt->execute();
    $stmt->store_result();
    $row = $stmt->num_rows;

    echo $row;
}

if(isset($_GET['remove'])){
    $pro_id = $_GET['remove'];

    $stmt = $conn->prepare("delete from cart where pro_id=?");
    $stmt->bind_param("i",$pro_id);
    $stmt->execute();

    $_SESSION['showAlert']='block';
    $_SESSION['message']='Item removed from the cart!';
    header('location:cart.php');
}

 if(isset($_GET['clear'])){
    $stmt = $conn->prepare("delete from cart");
   
    $stmt->execute();

    $_SESSION['showAlert']='block';
    $_SESSION['message']=' all Item removed from the cart!';
    header('location:cart.php');

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
}
 

?>



