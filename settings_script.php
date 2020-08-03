<?php
    require 'includes/common.php';
    if(!isset($_SESSION['email'])){
    header('location: index.php?');
}

    $email = $_SESSION['email'];

    $op = $_POST['op'];
    $op = mysqli_real_escape_string ($con , $op);
    $op = md5($op);

    $np = $_POST['np'];
    $np = mysqli_real_escape_string ($con , $np);
    $np=md5($np);

    $rnp = $_POST['rnp'];
    $rnp = mysqli_real_escape_string ($con , $rnp);
    $rnp = md5($rnp);

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$op'";
    $res = mysqli_query($con , $query) or die(mysqli_error($con));
    $row = mysqli_num_rows($res);

    if ($row > 0 && $np==$rnp){
        $success = "<span class='green'>Password Changed</span>";
        $update_query = "UPDATE users SET password = '$np' WHERE email = '$email'";
        $update_query_result = mysqli_query($con , $update_query) or die(mysqli_error($con));
        header("location:settings.php?m1=".$success);
    }else{
        $error = "<span class='red'>Invalid Credentials</span>";
        header("location:settings.php?m1=".$error);
    }
?>