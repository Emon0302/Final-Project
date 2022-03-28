<?php
//var_dump($_POST);

$_title=$_POST['title'];
//echo $_title;


//Connect to Database.
$servername = "localhost";
$username = "root";
$password = "";


$conn = new PDO("mysql:host=$servername;dbname=ecommerce302713", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query='INSERT INTO `banners` (`title`) VALUES (:title)';
$stmt=$conn->prepare($query);
$stmt->bindParam(':title',$_title);
$result=$stmt->execute();
// var_dump($result);
header('Location:index.php');