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

	<title>CONTACT | MOBIE-O-MANIA</title>

	<style type="text/css">
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
?>

	<div class="container" style="margin-top: 70px">
		<div class="row">
			<div class="col-lg-10">
				<h2 style="font-weight: bold;">LIVE SUPPORT</h2>
				<p><h4>24 hours | 7 days a week | 365 days a year Live Technical Support</h4></p>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its content. The point of using Lorem Ipsum is that it hs a more-or-less normal distribution of letters. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
			</div>

			<div class="col-lg-2">
				<img src="ls.jpg" class="img-responsive" alt="Responsive image">
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8">
				<h2 style="font-weight: bold;">CONTACT US</h2>
				<form>
					<div class="form-group">
						<label for="name">Name :</label>
						<input type="text" name="name" class="form-control">
					</div>

					<div class="form-group">
						<label for="email">Email :</label>
						<input type="email" name="email" class="form-control">
					</div>

					<div class="form-group">
						<label for="msg">Message :</label>
						<textarea name="msg" class="form-control"></textarea>
					</div>

					<button type="button" class="btn btn-primary" style="font-weight: bold;">Submit</button>
				</form>
			</div>

			<div class="col-lg-4">
				<h2 style="font-weight: bold;">Company Information :</h2>
				<p>500 Mahatma Gandhi Rd,</p>
				<p>22-56-2-9 Sector-14 , Gurgaon,</p> 
				<p>INDIA</p>
				<p>Phone: +91-123-0000000</p>
				<p>Fax: (000) 000 00 00 0</p>
				<p>Email: info@mycompany.com</p>
				<p>Follow on: Facebook, Twitter</p>
			</div>
		</div>
	</div>
	<br>
<?php  
	include 'includes/footer.php';
?>
</body>
</html>