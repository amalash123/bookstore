

<?php 
 
 $conn = mysqli_connect('localhost', 'root', '' , 'bookstore');
 
if(isset($_GET['id'])){
    $book_id = $_GET['id'];
    $sql = "SELECT * FROM books  WHERE book_id='$book_id' ";
    $result = mysqli_query($conn, $sql);
    
   
  
//    header('location:products.php');

$row = mysqli_fetch_assoc($result );

$name  = $row['name'];
$price  = $row['price'];
$author  = $row['author'];
$description  = $row['description'];
$image  = $row['image'];
}


?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Details</title>
</head>
<body>
    <header class="" style="position: fixed; width: 100%; z-index: 1; background: linear-gradient(45deg, green,rgb(223, 148, 50));">
        <div class="container-fluid">
          <div class="row  text-white">
              <div class="col-md-10 col-9 p-3 pl-5">
               <H2>More Details</H2>
              </div>
              <div class="col-md-2 col-3 p-3 pl-5">
              <a href=""class="btn btn-success ">Cart</a>
              <a href="comic.php"class="btn btn-success">Back</a>
              </div>
              </div>
              </div>
</header>
<section class="" >
    <div class="container " style="padding-top:7rem";>
    <div class="row text-black">
        <div class="col-md-6  ">
            <img src="<?php echo $image ?>" alt="" class='img-fluid' style='height:500px;width:500px;'>
        </div>
        <div class="col-md-6 pt-5">
        <h2><b><?php echo $name ?></b></h2>
        <h3><b>By <?php echo $author ?></b></h3>
        <h2 style="font-size:larger; color:red;"><b>INR <?php echo  $price ?>.00 </b></h2>
<p>     <?php echo $description ?></p> 
<p><h5 style="font-size:x-smaller; ">Category : <?php echo $row['category']; ?> </h5></p>
<div class="row">
<div class="col-md-2">

 <h4>Quantity   <h4>
</div>
<div class="col-md-2">
<form action='addToCart.php'>  
    <input type="hidden" name='id' value='<?php echo  $book_id ?>'>
        <input type="number" class='form-control' name='quantity'>
       

</div>
</div>
<p> 
<p>    <div class="col-md-4">
    <button  type='submit' class="btn btn-primary btn-xs pull-right"  >
                        <i class="fa fa-cart-arrow-down"></i> Add To Cart
                    </button>
    </div>
         </form>           


  
</div>
</div>
</div>   
</section>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2392c4c722.js" crossorigin="anonymous"></script>
</body>
</html>    
       


































