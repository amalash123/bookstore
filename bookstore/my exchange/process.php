<?php
session_start();
$name="";
$author="";
$description="";
$price="";
$mysqli = new mysqli('localhost','root','','bookstore') or die(mysqli_error($mysqli));
if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $files = $_FILES['file'];
    $mobile = $_POST['mobile'];
    
    $filename = $files['name'];
    $fileerror = $files['error'];
    $filetmp = $files['tmp_name'];
    $fileext = explode('.',$filename);
    $filecheck = strtolower(end($fileext));
    $fileextstored = array('png','jpg','jpeg');

    $cid = $_SESSION['customerid']; 
    $con = mysqli_connect('localhost',"root" ,"" ,"bookstore");
    $sql = "SELECT * FROM user_data where userid = $cid";
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_assoc($result);
   $insertOrder = "INSERT INTO exchange (userid, totalprice, orderstatus, paymentmode )
       VALUES ('$cid', '$total', 'Order Placed', '$payment')";  
   

    if(in_array($filecheck,$fileextstored))
    {
         $destinationfile = 'upload/'.$filename;
         move_uploaded_file($filetmp,$destinationfile );
    }

    $mysqli->query("INSERT INTO exchange (name,author,description,price,image,mobile,userid) VALUES('$name','$author','$description','$price','$destinationfile','$mobile','$cid')")
    or die(mysqli_error($mysqli));
$_SESSION['message'] = "Record has been saved!";
$_SESSION['msg_type'] = "success";
header("location:add-books.php");

}
if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM exchange WHERE id=$id") or die($mysqli->error());
    $_SESSION['message'] = "Record has been deleted!";
$_SESSION['msg_type'] = "danger";
header("location:added-books.php");
}
if(isset($_loggedin['delete']))
{
    
}

