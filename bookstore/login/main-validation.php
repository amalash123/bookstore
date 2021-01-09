<?php
 session_start();

 $con = mysqli_connect('localhost',"root" ,"" ,"bookstore");
 mysqli_select_db($con, 'bookstore');
 $username = $_POST['user'];
 $pass = $_POST['password'];
 $s = "select * from login where username = '$username' && password = '$pass'";
 $result = mysqli_query($con,$s);
 $num = mysqli_num_rows($result);
 $row = mysqli_fetch_assoc($result);

if ($num ==1)
{
    $_SESSION['username'] = $username;
    $_SESSION['customerid'] = $row['user_id'];
    header('location:../index.php');
}
else {
    header('location:main-login.php?message=1');
 //    $message =  'incorrect Credentials';
  }
?>