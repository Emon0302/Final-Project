<?php
include("../connection/connect.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($db,"DELETE FROM dealer WHERE de_id = '".$_GET['dealer_del']."'");
header("location:all_dealer.php");  

?>
