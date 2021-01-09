<?php 
 
 $conn = mysqli_connect('localhost', 'root', '' , 'bookstore');
 require_once('addToCart.php');
 $book_id = "";
    $sql = "SELECT * FROM books  WHERE book_id='$book_id' ";
    $result = mysqli_query($conn, $sql);

if(!isset($_SESSION['cart']) && empty($_SESSION['cart']) ){
  $cart='';
}
else{
$cart =  $_SESSION['cart'];
}
//print_r($cart);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    body
    {
        background:linear-gradient(45deg,
    #b91eda,
    #a02ae0,
    #8234e5,
    #5d3be8,
    #c012eb    
    
    );
    }
    </style>
    <title>Cart</title>
</head>
<header class="" style="position: fixed; height:5%; width: 100%; z-index: 1; ">
        <div class="container-fluid">
          <div class="row  text-white">
              <div class="col-md-5 col-9 p-3 pl-5">
            
              </div>
              <div class="col-md-7 col-3 p-3 pl-5">
              <nav class="navbar navbar-expand-lg navbar-light ">
              
              
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link text-white " href="index.php" > <i class="fa fa-home"></i>  Home <span class="sr-only">(current)</span></a>
                  </li>
               
                   
                  <div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Continue Shopping?
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="action.php">Action</a>
    <a class="dropdown-item" href="comic.php">Comic</a>
    <a class="dropdown-item" href="fantasy.php">Fantasy</a>
    <a class="dropdown-item" href="fiction.php">Fiction</a>
    <a class="dropdown-item" href="horror.php">Horror</a>
    <a class="dropdown-item" href="thriller.php">Thriller</a>
  </div>
</div>
                   

                </ul>
                
              </div>
            </nav>
             
              </div>
              </div>
              </div>
    </header>
 
 
<div class="container" style="padding-top:2rem";>
    <h2 class='text-center text-white'>My Cart</h2>

   <table class="table table-bordered bg-white">
       <tr>
           <th>Image</th>
           <th>Product</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Total</th>
           <th>Action</th>
       </tr>

       <?php
       $total = 0;
       if(!isset($_SESSION['cart']) && empty($_SESSION['cart']) ){
        $cart='';
      }
      else{
     
      
       foreach($cart as $key => $value){
        // echo $key ." : ". $value['quantity'] . "<br>";
        
        $sql = "SELECT * FROM books where book_id = $key";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result)
        ?>


            <tr>
           <td><img src="<?php echo $row['image']?> " height="100px" width="100px" alt=""></td>
           <td><a href="single.php?id=<?php echo $row['book_id']?>"><?php echo $row['name']?></a></td>
           <td><?php echo $row['price']?> </td>
           <td><?php echo $value['quantity']?></td>
           <td><?php echo $row['price'] * $value['quantity'] ?> </td>
            <td><a href='deleteCart.php?id=<?php echo $key; ?>'>Remove</a></td>
            </tr>

        <?php

$total = $total +  ($row['price'] * $value['quantity']);
    }
  }
    ?>
      
   </table>

   
<div class="card">
<div class="card-header">Total</div>
<div class="card-body">
Total Amount: INR <?php echo $total; ?>.00/-
</div>
</div>
<div class="text-right mt-2">
    <!-- <button class="btn mr-3">Update Cart</button> -->

  <a href="checkout.php">  <button class="btn btn-danger">Checkout</button>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2392c4c722.js" crossorigin="anonymous"></script>
</body>
</html>    
       








