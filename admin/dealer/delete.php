<?php
$_id = $_GET['de_id'];
$servername = "localhost";
$username = "root";
$password = "";


$conn = new PDO("mysql:host=$servername;dbname=event", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query= "DELETE FROM `admin_order` where `admin_order`.`de_id`=$_id";
$stmt=$conn->prepare($query);
$result=$stmt->execute();
header('Location:index.php');
?>