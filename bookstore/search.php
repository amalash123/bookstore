<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Comic</title>
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
        .search
{
    font-size: 20px;
    transform: translate(-50%,-50%);
    left: 48%;
    top: 50%;
    height: 40px;
    width: 450px;
    border: 4px solid #1e56a0;
    display: block;
    background: #fff;
    outline: none;
    color: black;
    padding: 0px 20px;
    border-radius: 40px;
    margin-left: 200px;
    margin-top: 50px;
    box-shadow:0px 5px 10px rgba(0, 0, 0, 1);
}
.search1{
    font-size: 20px;
    transform: translate(-50%,-50%);
    left: 48%;
    top: 50%;
    height: 40px;
    margin-top:15%;
    margin-left: 50%;
    width: 450px;
}
 .result{
    font-size: 10px;
    margin-top:2%;
    margin-left: 13%;
    height: 300px;
    width:70%;
    background:#fff;
    color: black;
 }      


    </style>
</head>
<body class="bg-info">
    <header class="" style="position: fixed; width: 100%; z-index: 1; ">
        <div class="container-fluid">
          <div class="row  text-white">
              <div class="col-md-5 col-9 p-3 pl-5">
               
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
    <a class="dropdown-item" href="fiction.php">Fiction</a>
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
    
   
    
    
    
    <div class="container text-white mt-2">
    <h2 class='text-center text-white'>Your Search Results</h2>

    <div class="search1 justify-content-center">
            <form action="search.php" method="GET">
  <input class="search" type="text" name="q"  placeholder=" Search by Name/Author/Category " ><i class="fa fa-search" ></i> 
  
  </form>  
  <?php
if(isset($_GET['q'])){
    $q = $_GET['q'];
    session_start();
    
       
        $mysqli = new mysqli('localhost','root','','bookstore') or die(mysqli_error($mysqli));
        $RESULT = $mysqli->query("SELECT * FROM books  WHERE name LIKE '%$q%'") or die(mysqli_error($mysqli));
        $num_rows = mysqli_num_rows($RESULT);
       
    }
        
        ?> 
</div>  
<h4 class='text-center'><strong><?php echo  $num_rows; ?></strong> Results for '<?php echo $q; ?>'</h4>
<div class="result text-center p-2">
<?php
while($row = $RESULT->fetch_assoc()):
        $id = $row['book_id'];
        $name = $row['name'];
        $desc = $row['description'];

       
        ?>
       <h3> <a   href='single.php?id=<?php echo  $row["book_id"] ?>'><?php  echo $name; ?> </a></h3>
<p><h4><?php  echo $desc; ?></h4>

<?php
        endwhile; 
        ?>
      
    
        
        
     
    
    

        </div>
                   
        
    </div>
    </div>