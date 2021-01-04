<?php
 session_start();

 $con = mysqli_connect('localhost',"root" ,"" ,"bookstore");
 mysqli_select_db($con, 'bookstore');
 $username = $_POST['user'];
 $pass = $_POST['password'];
 $s = "select * from login where username = '$name' && password = '$pass'";
 $result = mysqli_query($con,$s);
 $num = mysqli_num_rows($result);
if ($num ==1)
{
    $_SESSION['username'] = $username;
    header('location:../home.php');
}
else{
   header('location:login.php');
}

?>