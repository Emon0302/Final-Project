<?php
// $var_dump($_POST);
$get = $_REQUEST['o_id'];

$de_id=$_POST['de_id'];
$_username=$_POST['username'];


$_quantity=$_POST['quantity'];
$_price=$_POST['price'];
$_shift=$_POST['shift'];
$_o_hr=$_POST['o_hr'];
$_c_hr=$_POST['c_hr'];
$_edate=$_POST['edate'];
$_type=$_POST['type'];
$_status=$_POST['status'];
$_date=$_POST['date'];
// echo $_title;


// Connect to database

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=event", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "UPDATE `admin_order` SET `o_id`=:o_id,`de_id`=:de_id,`username`=:username,`quantity`=:quantity ,`price`=:price ,`shift`=:shift ,`o_hr`=:o_hr ,`c_hr`=:c_hr ,`edate`=:edate ,`type`=:type ,`status`=:status ,`date`=:date  WHERE `o_id`=$get";


$stmt = $conn->prepare($query);
$stmt->bindParam(':o_id',$get);
$stmt->bindParam(':de_id',$de_id);
$stmt->bindParam(':username',$_username);
$stmt->bindParam(':quantity',$_quantity);
$stmt->bindParam(':price',$_price);
$stmt->bindParam(':shift',$_shift);
$stmt->bindParam(':o_hr',$_o_hr);
$stmt->bindParam(':c_hr',$_c_hr);
$stmt->bindParam(':edate',$_edate);
$stmt->bindParam(':type',$_type);
$stmt->bindParam(':status',$_status);
$stmt->bindParam(':date',$_date);
$result = $stmt->execute();
// var_dump($result);
header('location:index.php');
?>