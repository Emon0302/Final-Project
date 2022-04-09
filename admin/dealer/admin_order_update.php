<?php

include("../connection/connect.php");
error_reporting(0);
session_start();
if(empty($_SESSION["de_id"]))
{
	header('location:index.php');
}
else
{

$form_id=$_GET['form_id'];
$status=$_POST['status'];
$query=mysqli_query($db,"insert into remark(frm_id,status) values('$form_id','$status')");
$sql=mysqli_query($db,"update admin_order set status='$status' where o_id='$form_id'");
header("location:admin_order.php");

echo "<script>alert('form details updated successfully');</script>";

  }

 ?>


   