<?php
require 'includes/common.php';
$item_id=$_GET['id'];
$user_id=$_SESSION['user_id'];
$status="Added to Cart";

$query="INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', '$status')";
echo $query;
$result= mysqli_query($con, $query) or die(mysqli_error($con));
header('location: home.php');
?>

