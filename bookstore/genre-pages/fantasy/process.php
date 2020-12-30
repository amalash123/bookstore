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

    $filename = $files['name'];
    $fileerror = $files['error'];
    $filetmp = $files['tmp_name'];
    $fileext = explode('.',$filename);
    $filecheck = strtolower(end($fileext));
    $fileextstored = array('png','jpg','jpeg');
    if(in_array($filecheck,$fileextstored))
    {
         $destinationfile = 'upload/'.$filename;
         move_uploaded_file($filetmp,$destinationfile );
    }

    $mysqli->query("INSERT INTO fantasy (name,author,description,price,image) VALUES('$name','$author','$description','$price','$destinationfile')")
    or die(mysqli_error($mysqli));
$_SESSION['message'] = "Record has been saved!";
$_SESSION['msg_type'] = "success";
header("location:admin-fantasy.php");

}
if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM fantasy WHERE id=$id") or die($mysqli->error());
    $_SESSION['message'] = "Record has been deleted!";
$_SESSION['msg_type'] = "danger";
header("location:admin-fantasy.php");
}
if(isset($_loggedin['delete']))
{
    
}

