<?php  
	require 'includes/common.php';
	if(isset($_SESSION['email']))
	{
		header('location:home.php');
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

	<title>SIGN UP | MOBIE-O-MANIA</title>

	<style type="text/css">
		footer{
				position: fixed;
				bottom: 0;
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

	<div class="container">
		<div class="row">
			<div class="col-lg-8" style="margin-top: 25px;">
				<img src="1.jpg" class="img-responsive">
			</div>
			<div class="col-lg-4">
				<h2 style="margin-top: 100px; font-weight: bold;">SIGN UP</h2>
				<form action="signup_script.php" method="post">
                        
                        <div class="form-group">
                            <input type="text" placeholder="Name" class="form-control" name="name" required >
                        </div>
                        
                        <div class="form-group">
                            <input type="email" placeholder="Email" name="email" class="form-control" required pattern="[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" title="Enter a valid email!">
                            <p class="text-warning"><?php
                                if(isset($_GET["email_error"])){
                                  echo $_GET['email_error'];
                                }
                                ?></p>
                        </div>                                                                              
                        
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control" name="password" required pattern=".{6,}" title="Password must contain at least 6 characters">                            
                            <p class="text-warning"><?php
                                if(isset($_GET["pass_error"])){
                                  echo $_GET['pass_error'];
                                }
                                ?></p>
                        </div>                                 
                        
                        <div class="form-group">
                            <input type="tel" placeholder="Contact" class="form-control" name="phone" required size="10" maxlength="10" title="Enter a valid number!">
                            <p class="text-warning"><?php
                                if(isset($_GET["phone_error"])){
                                  echo $_GET['phone_error'];
                                }
                                ?></p>
                        </div>                                                      
                        
                        <div class="form-group">
                            <input type="text" placeholder="City" class="form-control" required name="city">                           
                        </div>
                        
                        <div class="form-group">
                            <input type="text" placeholder="Address" class="form-control" required name="address">
                        </div>
                        
                        <div>
                        <button type="submit" class="btn btn-primary" style="font-weight: bold;">Submit</button>                    
                        </div>
                        
                        <div><p class="text-warning">                         
                            </p></div>
				</form>
			</div>
		</div>
	</div>
<?php  
	include 'includes/footer.php';
?>
</body>
</html>