<?php
include 'includes/common.php';
if(isset($_SESSION['email'])){
    header('location:home.php');
}

$email= mysqli_real_escape_string($con, $_POST['email']);
$regex_email = "/[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$password= mysqli_real_escape_string($con, $_POST['password']);

if(!preg_match($regex_email, $email) || strlen($password)<6)
{
    header('location:login.php?error= Enter a valid email or password');
}
else
{

$password= md5($password);

$select_query="SELECT id,email FROM users WHERE email='$email' and password='$password'";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$num=mysqli_num_rows($select_query_result);

if($num==0)
    {
    header('location:login.php?error=User not Registered');
    }
else{
        $row = mysqli_fetch_array($select_query_result);
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = $row['id'];
        header('location: home.php');
}
}
?>
