<?php 
    require 'includes/Common.php';
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
        <title>LOGIN | MOBIE-O-MANIA</title>

        <style type="text/css">
        	.panel{
        		margin-top: 100px;
        	}

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
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <!-- Add your code here -->
                    <div class=" panel panel-primary">
                    	<div class="panel-heading"><h3 style="font-weight: bold;">Login</h3></div>

                    	<div class="panel-body">
                    		<form method="post" action="login_submit.php">
                                <p class="text-warning" style="font-style: italic;">Login to make a purchase</p>
                    			<div class="form-group">
                    				<label for="email">Email :</label>
                    				<input type="email" name="email" class="form-control">
                    			</div>

                    			<div class="form-group">
                    				<label for="password">Password :</label>
                    				<input type="password" name="password" class="form-control">
                    			</div>

                    			<input type="submit" value="Submit" class="btn btn-primary" style="font-weight: bold;">
                    		</form>
                    	</div>

                    	<div class="panel-footer">
                    		<p>Don't have an account?<a href="signup.php" style="font-weight: bold;">Register</a></p>
                    	</div>
                    </div>
                </div>
            </div>
        </div>

<?php  
    include 'includes/footer.php';
?>
<!--         <footer>
        <div class="container">
            <center>
                Copyright © Lifestyle Store. All Rights
                Reserved | Contact Us: +91 90000 00000 
            </center>
        </div>
        </footer>
 --></body>
</html>