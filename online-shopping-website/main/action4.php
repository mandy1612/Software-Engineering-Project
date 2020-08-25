<?php 
require 'dbconn.php';
session_start();
if (isset($_SESSION["id"])) {
    $uid = $_SESSION['id'];

$errors = array(); 

if(isset($_POST['pid'])){
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    
       $query = $conn->prepare("insert into view(pro_id,pro_title,uid) values(?,?,?)");
       $query->bind_param("isi",$pid,$pname,$uid);
       $query->execute();
      
}
}
?>