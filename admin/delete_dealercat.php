<?php
include("../connection/connect.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($db,"DELETE FROM dealer_cat WHERE dc_id = '".$_GET['cat_del']."'");
header("location:add_dealercat.php");  

?>
