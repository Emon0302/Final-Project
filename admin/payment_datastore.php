<?php
$web='http://localhost/project/admin';
$get = $_REQUEST['o_id'];

$de_id=$_POST['de_id'];


$_username=$_POST['username'];
$_c_name=$_POST['c_name'];
$_package=$_POST['package'];

$_quantity=$_POST['quantity'];
$_price=$_POST['price'];
$_shift=$_POST['shift'];
$_o_hr=$_POST['o_hr'];
$_c_hr=$_POST['c_hr'];
$_edate=$_POST['edate'];
$_type=$_POST['type'];
$_total=$_POST['total'];
$_payment=$_POST['payment'];
$_t_id=$_POST['t_id'];
// echo $_title;


// Connect to database

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=event", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "UPDATE `admin_order` SET `o_id`=:o_id,`de_id`=:de_id,`package`=:package,`username`=:username,`c_name`=:c_name,`quantity`=:quantity ,`price`=:price ,`shift`=:shift ,`o_hr`=:o_hr ,`c_hr`=:c_hr ,`edate`=:edate ,`type`=:type ,`total`=:total ,`payment`=:payment,`t_id`=:t_id  WHERE `o_id`=$get";


$stmt = $conn->prepare($query);
$stmt->bindParam(':o_id',$get);
$stmt->bindParam(':de_id',$de_id);
$stmt->bindParam(':package',$_package);
$stmt->bindParam(':username',$_username);
$stmt->bindParam(':c_name',$_c_name);
$stmt->bindParam(':quantity',$_quantity);
$stmt->bindParam(':price',$_price);
$stmt->bindParam(':shift',$_shift);
$stmt->bindParam(':o_hr',$_o_hr);
$stmt->bindParam(':c_hr',$_c_hr);
$stmt->bindParam(':edate',$_edate);
$stmt->bindParam(':type',$_type);
$stmt->bindParam(':total',$_total);
$stmt->bindParam(':payment',$_payment);
$stmt->bindParam(':t_id',$_t_id);
$result = $stmt->execute();
// var_dump($result);
header('Location:'.$web.'/all_dealer_order.php');
?>