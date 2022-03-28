<?php
// $var_dump($_POST);
$get = $_REQUEST['id'];
$_name = $_POST['name'];
$_link = $_POST['link'];
// echo $_title;


// Connect to database

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ecommerce", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query = "UPDATE `categories` SET `name`=:name,`link`=:link WHERE `id`=$get";


$stmt = $conn->prepare($query);
$stmt->bindParam(':name',$_name);
$stmt->bindParam(':link',$_link);
$result = $stmt->execute();
var_dump($result);
header('location:index.php');
?>