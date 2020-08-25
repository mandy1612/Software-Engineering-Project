<?php include('action4.php') ?>
<?php 
require 'dbconn.php';
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

    $stmt = $conn->prepare("select pro_title from wishlist where pro_title=? and uid={$_SESSION['id']}");
    $stmt->bind_param("s",$pname);
    $stmt->execute();
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();
   $code = $r['pro_title'];

   if(!$code){
       $query = $conn->prepare("insert into wishlist(pro_id,pro_title,uid) values(?,?,?)");
       $query->bind_param("isi",$pid,$pname,$uid);
       $query->execute();
       echo "Item  added in your wishlist";
       echo ' <i class="fa fa-heart" aria-hidden="true" ></i>';
   }
  
   else{
    echo "Item already added in your wishlist";
   }
}

if(isset($_GET['wishlistItem']) && isset($_GET['wishlistItem']) == 'wishlist_item'){
    $stmt = $conn->prepare("select * from wishlist where uid={$_SESSION['id']}");
    $stmt->execute();
    $stmt->store_result();
    $row = $stmt->num_rows;

    echo $row;
}

if(isset($_GET['remove'])){
    $pro_id = $_GET['remove'];

    $stmt = $conn->prepare("delete from wishlist where pro_id=?");
    $stmt->bind_param("i",$pro_id);
    $stmt->execute();

    $_SESSION['showAlert']='block';
    $_SESSION['message']='Item removed from the cart!';
    header('location:wishlist.php');
}

 if(isset($_GET['clear'])){
    $stmt = $conn->prepare("delete from wishlist");
   
    $stmt->execute();

    $_SESSION['showAlert']='block';
    $_SESSION['message']=' all Item removed from the cart!';
    header('location:wishlist.php');

 }
}
?>