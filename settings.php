<?php  
    require 'includes/common.php';
    if(!isset($_SESSION['email']))
    {
        header('location:index.php');
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

	<title>SETTINGS | MOBIE-O-MANIA</title>

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
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4" style="margin-top: 80px;">
                 		<h2 style="font-weight: bold;">Change Password</h2>
                 		<form action="settings_script.php" method="post">
                    			<div class="form-group">
                    				<input type="password" class="form-control" placeholder="Old Password" name="op">
                    			</div>

                    			<div class="form-group">
                    				<input type="password" class="form-control" placeholder="New Password" name="np">
                    			</div>

                    			<div class="form-group">
                    				<input type="password" class="form-control" placeholder="Re-type New Password" name="rnp">
                    			</div>

   	                			<input type="submit" value="Submit" class="btn btn-primary" style="font-weight: bold;">
                    	</form>
                </div>
            </div>
        </div>
<?php  
	include 'includes/footer.php';
?>
</body>
</html>