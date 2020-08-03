<footer>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h4 style="font-weight: bold; color: cyan;">Information</h4>
                <p><a href="about.php"style="font-weight: bold; color: silver;">About Us</a></p>
                <p><a href="contact.php" style="font-weight: bold; color: silver;">Contact Us</a></p>
            </div>
            <div class="col-sm-4">
                <h4 style="font-weight: bold; color: cyan;">My Account</h4>
                <?php if(!isset($_SESSION['email'])){?>
                    <p><a href="login.php" style="font-weight: bold; color: silver;">Login</a></p>
                    <p><a href="signup.php" style="font-weight: bold; color: silver;">Sign-Up</a></p>
                <?php }
                else{ ?>
                    <p><a href="settings.php" style="font-weight: bold; color: silver;">Settings</a></p>
                    <p><a href="logout.php" style="font-weight: bold; color: silver;">Log Out</a></p>
                <?php } ?>
            </div>
            <div class="col-sm-4">
                <h4 style="font-weight: bold; color: cyan;">Contact Us</h4>
                <p style="font-weight: bold; color: silver;">Contact : +91 123-0000000</p>
            </div>
        </div>
    </div>

</footer>