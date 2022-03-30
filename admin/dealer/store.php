<?php
$web='http://localhost/project/admin';
//var_dump($_POST);
$_id=$_POST['de_id'];
$package_detail=$_POST['package_detail'];
$_username=$_POST['username'];
$_quantity=$_POST['quantity'];
$_price=$_POST['price'];
$_shift=$_POST['shift'];
$_o_hr=$_POST['o_hr'];
$_c_hr=$_POST['c_hr'];
$_edate=$_POST['edate'];
$_type=$_POST['type'];


//echo $_title;


//Connect to Database.
$servername = "localhost";
$username = "root";
$password = "";


$conn = new PDO("mysql:host=$servername;dbname=event", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query='INSERT INTO `admin_order` (`de_id`,`package`,`username`,`quantity`,`price`,`shift`,`o_hr`,`c_hr`,`edate`,`type`) VALUES (:de_id,:package,:username,:quantity,:price,:shift,:o_hr,:c_hr,:edate,:type)';
$stmt=$conn->prepare($query);
$stmt->bindParam(':de_id',$_id);
$stmt->bindParam(':package',$package_detail);
$stmt->bindParam(':username',$_username);
$stmt->bindParam(':quantity',$_quantity);
$stmt->bindParam(':price',$_price);
$stmt->bindParam(':shift',$_shift);
$stmt->bindParam(':o_hr',$_o_hr);
$stmt->bindParam(':c_hr',$_c_hr);
$stmt->bindParam(':edate',$_edate);
$stmt->bindParam(':type',$_type);

$result=$stmt->execute();
// var_dump($result);
header('Location:'.$web.'/all_dealer_order.php');

