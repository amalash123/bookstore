<?php
 session_start();
header('location:../main-login.php');

 $con = mysqli_connect('localhost',"root" ,"" ,"bookstore");
 mysqli_select_db($con, 'bookstore');
 $username = $_POST['user'];
 $pass = $_POST['password'];
 $name = $_POST['name'];
 $email = $_POST['email'];
 $mobile = $_POST['mobile'];
 $s = "select * from login where name = '$name'";
 $result = mysqli_query($con,$s);
 $num = mysqli_num_rows($result);
if ($num ==1)
{
    echo"username Already Taken";
}
else{
    $reg = "insert into login(username,password,name,email,mobile) values ('$username' , '$pass','$name','$email','$mobile')";
    mysqli_query($con,$reg);
    echo"Registration Successful";
}

?>