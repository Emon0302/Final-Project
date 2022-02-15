<?php
include("../connection/connect.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($db,"DELETE FROM admin WHERE adm_id = '".$_GET['user_del']."'");
header("location:allcompanyuser.php");  

?>
