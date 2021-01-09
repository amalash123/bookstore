<?php
require_once 'process.php';
$output="";
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Fiction</title>
    <style>
        body{
           
            margin:0;
            background:linear-gradient(45deg,
    #b91eda,
    #a02ae0,
    #8234e5,
    #5d3be8,
    #c012eb    
    
    );
        }
       .info
       {
           height:100%;
           width:100% ;
           color:white;
       }
       


    </style>
</head>
<body class="bg-info">
    <header class="" style="position: fixed; width: 100%; z-index: 1; background: linear-gradient(45deg, green,rgb(223, 148, 50));">
        <div class="container-fluid">
          <div class="row  text-white">
              <div class="col-md-5 col-9 p-3 pl-5">
               <H2>Fiction</H2>
              </div>
              <div class="col-md-7 col-3 p-3 pl-5">
              <nav class="navbar navbar-expand-lg navbar-light ">
              
              
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link text-white " href="index.php" ><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
                  </li>
                         
              
                  <li class="nav-item">
                  <a class="nav-link  text-white" href="cart.php">
          <?php 
          $count = '0';
					 
					if(isset($_SESSION['cart'])){
					 $cart = $_SESSION['cart'];
           $count = count($cart);
          }
					?>
				     <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">
					 <?php echo $count?>
					 </span>
           </a>
                    
                    </li>

    
                   
                  <div class="dropdown">
  <a class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Categories
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="action.php">Action</a>
    <a class="dropdown-item" href="fantasy.php">Fantasy</a>
    <a class="dropdown-item" href="comic.php">Comic</a>
    <a class="dropdown-item" href="horror.php">Horror</a>
    <a class="dropdown-item" href="thriller.php">Thriller</a>
  </div>
</div>
                   
<li class="nav-item">
<a class="nav-link  text-white" href="index.php">Back</a>
                    </li> 
                </ul>
                
              </div>
            </nav>
             
              </div>
              </div>
              </div>
    </header>
    <section class="" >
    <div class="container " style="padding-top:5rem";>
   
       
            <div class="col-sm-12">
               
                <div class="row mt-4">
                <?php
   $mysqli = new mysqli('localhost','root','','bookstore') or die(mysqli_error($mysqli));
   $RESULT = $mysqli->query("SELECT * FROM books WHERE category = 'fiction' ORDER BY book_id ASC") or die(mysqli_error($mysqli));
   while($row = $RESULT->fetch_assoc()):?>
        
            
            <div class="col-md-3 pb-3">
                    <div class="card">
                    <div class="card-body">
                    <img src="<?php echo $row['image'];?>" height="200px" width="100%">
                    <h5 style="font-size:x-smaller"> <?php echo $row['name']; ?> </h5>
          <h5 style="font-size:medium">by <?php echo $row['author']; ?> </h5>  
            <h5 style="font-size:larger; color:red;"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $row['price']; ?> </h5> 
          
          <a href="addToCart.php?id=<?php echo $row['book_id']; ?>"
                class="btn btn-primary"> <i class="fa fa-cart-arrow-down"></i> ADD TO CART</a>
                
                <a   href='single.php?id=<?php echo  $row["book_id"] ?>' class="btn btn-default btn-xs pull-left">
                       Details
                    </a>
                        </div>
                        
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
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