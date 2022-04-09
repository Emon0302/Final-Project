<?php
include("../connection/connect.php");
error_reporting(0);
session_start();
$form_id=$_GET['form_id'];

$status=$_POST['status'];

$query=mysqli_query($db,"insert into remark(frm_id,status) values('$form_id','$status')");
$sql=mysqli_query($db,"update users_orders set status='$status' where o_id='$form_id'");
header("location:all_orders.php");

echo "<script>alert('Form details updated successfully');</script>";
?>