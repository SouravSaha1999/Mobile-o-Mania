<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php?');
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>SUCCESS</title>
</head>
<body>

<?php  
    
    $user_id = $_SESSION['user_id'];

    $item_id = explode(",",$_GET['id']); //with explode you can get splits the ids

for($i=0; $i<count($item_id); $i++){
   $final_id = $item_id[$i];

       $query = "UPDATE users_items SET status='Confirmed' WHERE user_id = '$user_id' AND item_id = '$final_id' AND status='Added to cart'";
    $res = mysqli_query($con , $query) or die(mysqli_error($con));       
  //then here you can do the update sql query then the row id is the `final_id` in every loop you will update the database.
}
?>
		<div class="container">
            <div class="row">
                <div class="jumbotron" style="margin-top: 80px;">
                            <p style="text-align: center; font-weight: bold;">Thank you for ordering from our E-Store. The order shall be delivered to you shortly</p>
                            <hr>
                            <p style="text-align: center; font-weight: bold;">Order some more items <a href="home.php">HERE</a></p>
                </div>
                </div>
            </div>
        </div>
</body>
</html>