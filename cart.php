<?php  
    require 'includes/common.php';
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

	<title>CART | MOBIE-O-MANIA</title>
    <style type="text/css">
                    footer{
                position: fixed;
                padding: 10px 0;
                background-color: #101010;
                color: #9d9d9d;
                bottom: 0;
                width: 100%;
            }
    </style>
</head>
<body>
<?php  
    include 'includes/header.php';
?>

	<div class="container">
		<div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4" style="margin-top: 80px;">
                 		<table class="table table-striped">

    <?php  
    $sum = 0;
    $id ="";
    $user_id = $_SESSION['user_id'];
    $query = "SELECT items.pid as id , items.price as price , items.name as name from users_items inner join items on users_items.item_id = items.pid where users_items.user_id = '$user_id' and status = 'Added to Cart'";
    $res = mysqli_query($con , $query) or die(mysqli_error($con));

    if(mysqli_num_rows($res)>=1)
    {
?>                            
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            
                            <tbody>

<?php  
    
    while($row = mysqli_fetch_array($res))
    {

        $sum += $row['price'];
        $id .= $row['id'].",";

        echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>Rs " . $row["price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
    }
    echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?id={$id}' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";

?>
    </tbody>
    <?php
        } else {
            echo "<h3>Add items to the cart first!</h3>";
        }
        ?>
        <?php
        ?>
                 		</table>
                </div>
            </div>
        </div>
    </div>

<?php  
    include 'includes/footer.php';
?>
</body>
</html>