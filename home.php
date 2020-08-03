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

	<title>HOME | MOBIE-O-MANIA</title>

	<style type="text/css">
		.panel{
			margin-top: 70px;
		}

		.panel-heading{
			font-weight: bold;
			font-size: large;
			color: black;
		}

		footer{
			width: 100%;
			background-color: black;
			color: white;
		}
	</style>

</head>
<body>
<?php  
	include 'includes/header.php';
	include 'includes/check-if-added.php';
?>

	<div class="container-fluid">
		
		<div class="row">
			
			<div class="col-lg-4">
				<div class="panel panel-primary">
					<div class="panel-heading">MOBILE 1</div>
					<div class="panel-body">
						<img src="1.jpg" class="img-responsive" alt="Responsive image"><br>
						<p>4.2'Screen, snap-dragon processor, 1GB RAM, 4GB Internal memory, 12MP Camera, Rs.5000</p>
						<?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block" style="font-weight: bold;">ORDER NOW</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(1)){
                                    echo '<a href="#" class="btn btn-block btn-success" style="font-weight: bold;" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=1" name="add" value="add"  class="btn btn-block btn-primary" style="font-weight: bold;">ADD TO CART</a>
                            <?php
                                }
                            }
                            ?>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4">
				<div class="panel panel-primary">
					<div class="panel-heading">MOBILE 2</div>
					<div class="panel-body">
						<img src="2.png" class="img-responsive" alt="Responsive image"><br>
						<p>4.6'Screen, snap-dragon processor, 2GB RAM, 3GB Internal memory,Rs.4500</p>
						<?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block" style="font-weight: bold;">ORDER NOW</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(2)){
                                    echo '<a href="#" class="btn btn-block btn-success" style="font-weight: bold;" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=2" name="add" value="add"  class="btn btn-block btn-primary" style="font-weight: bold;">ADD TO CART</a>
                            <?php
                                }
                            }
                            ?>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4">
				<div class="panel panel-primary">
					<div class="panel-heading">MOBILE 3</div>
					<div class="panel-body">
						<img src="4.jpg" class="img-responsive" alt="Responsive image"><br>
						<p>4'Screen, mediatek processor, 2GB RAM, 4GB Internal memory,Rs.6000</p>
						<?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block" style="font-weight: bold;">ORDER NOW</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(3)){
                                    echo '<a href="#" class="btn btn-block btn-success" style="font-weight: bold;" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=3" name="add" value="add"  class="btn btn-block btn-primary" style="font-weight: bold;">ADD TO CART</a>
                            <?php
                                }
                            }
                            ?>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			
			<div class="col-lg-4">
				<div class="panel panel-primary">
					<div class="panel-heading">MOBILE 4</div>
					<div class="panel-body">
						<img src="7.jpg" class="img-responsive" alt="Responsive image"><br>
						<p>4.2'Screen, Quad-core processor, 2GB RAM, 16GB Internal memory, 3500mAh Battery, Rs.12999</p>
						<?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block" style="font-weight: bold;">ORDER NOW</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(4)){
                                    echo '<a href="#" class="btn btn-block btn-success" style="font-weight: bold;" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=4" name="add" value="add"  class="btn btn-block btn-primary" style="font-weight: bold;">ADD TO CART</a>
                            <?php
                                }
                            }
                            ?>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4">
				<div class="panel panel-primary">
					<div class="panel-heading">MOBILE 5</div>
					<div class="panel-body">
						<img src="5.jpg" class="img-responsive" alt="Responsive image"><br>
						<p>5.2'Screen, snap-dragon-865 processor, 8GB RAM, 32GB Internal memory,in-built  Gaming Mode, Rs.19999</p>
						<?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block" style="font-weight: bold;">ORDER NOW</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(5)){
                                    echo '<a href="#" class="btn btn-block btn-success" style="font-weight: bold;" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=5" name="add" value="add"  class="btn btn-block btn-primary" style="font-weight: bold;">ADD TO CART</a>
                            <?php
                                }
                            }
                            ?>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4">
				<div class="panel panel-primary">
					<div class="panel-heading">MOBILE 6</div>
					<div class="panel-body">
						<img src="6.jpg" class="img-responsive" alt="Responsive image"><br>
						<p>4.6'Screen, snap-dragon-765 processor, 4GB RAM, 16GB Internal memory, 32MP camera, Rs.16999</p>
						<?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block" style="font-weight: bold;">ORDER NOW</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(6)){
                                    echo '<a href="#" class="btn btn-block btn-success" style="font-weight: bold;" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=6" name="add" value="add"  class="btn btn-block btn-primary" style="font-weight: bold;">ADD TO CART</a>
                            <?php
                                }
                            }
                            ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php  
	include 'includes/footer.php';
?>

</body>
</html>