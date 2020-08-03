<?php
    include 'includes/common.php';
?>

<div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php" style="font-weight: bold; color: cyan;">MOBILE-O-MANIA</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                <?php
                if(isset($_SESSION['email'])){
                ?>
                        <li><a href="cart.php" style="font-weight: bold; color: silver;"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a href="settings.php" style="font-weight: bold; color: silver;"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a href="logout.php" style="font-weight: bold; color: silver;"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
                        <li><a href="about.php" style="font-weight: bold; color: silver;"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
                        <li><a href="contact.php" style="font-weight: bold; color: silver;"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                <?php }
                else {?>
                        <li><a href="signup.php" style="font-weight: bold; color: silver;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php" style="font-weight: bold; color: silver;"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
                        <li><a href="about.php" style="font-weight: bold; color: silver;"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
                        <li><a href="contact.php" style="font-weight: bold; color: silver;"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                <?php } ?>
                    </ul>
                </div>
            </div>
</div>

