<?php
include("../connection/connect.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($db,"DELETE FROM ser_name WHERE rs_id = '".$_GET['res_del']."'");
header("location:all_services.php");  

?>
