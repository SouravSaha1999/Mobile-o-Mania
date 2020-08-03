<?php  
	require 'includes/common.php';

	if (isset($_GET['id'])) {
		$item_id = $_GET['id'];
		$user_id = $_SESSION['user_id'];

		$query = "DELETE from users_items where item_id = '$item_id' and user_id = '$user_id'";
		//die($query);
		$res = mysqli_query($con , $query) or die($con);
		header("location:cart.php");

	}
?>;