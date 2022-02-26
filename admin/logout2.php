<?php
session_start();
session_destroy();
$url = 'dealer.php';
header('Location: ' . $url);

?>