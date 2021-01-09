<?php 


session_start();


if(!isset($_SESSION['username']) && empty($_SESSION['username']) ){
header('location:../login/main-login.php');
}
?>
<?php  $cid = $_SESSION['customerid']; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>My Exchange</title>
    <style>
      body 
      {
        background:#c8c8ff;
      }
      </style>
</head>
<body>
    <header  style="position: fixed; width: 100%; z-index: 1;background: linear-gradient(45deg,#5667dd,#5ecbf7);">
        <div class="container-fluid">
          <div class="row  text-white">
              <div class="col-md-6 col-9 p-3 pl-5">
               <H2>MY EXCHANGE</H2>
              </div>
              <div class="col-md-6 col-3 my-auto ml-auto">
              <nav class="navbar navbar-expand-lg navbar-light ">
              
              
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link text-white " href="../index.php" > <i class="fa fa-home"></i>  Home <span class="sr-only">(current)</span></a>
                  </li>

                  
                  <div class="dropdown">
  <a class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fa fa-user-circle" > </i><?php echo $_SESSION['username']; ?>
  </a>
  

  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="logout.php">Log out</a>
   
  </div>
</div>
               
                   
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
      </header>

    <div class="conatiner-fluid ">
        <section class="col-md-12 ">
            <div class="row   pl-4 align-items-center">

            <div class="col-md-3 mt-3 ">
                <div class="card" style="width: 18rem; height: 15rem; margin-top: 8rem;">
  <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvRoV8hX6keuN3w_K4_4SpvaSAohfmm55gwQ&usqp=CAU" alt="Card image cap">
  <div class="card-body">
 
  <a href="add-books.php" class="btn btn-danger">ADD BOOKS FOR EXCHANGE</a>
  </div>
  </div>
  </div>



  <div class="col-md-3 mt-3 ">
                <div class="card" style="width: 18rem; height: 15rem; margin-top: 8rem;">
  <img class="card-img-top" src="https://clubs.scholastic.com/on/demandware.static/-/Sites-rco-us-Library/default/dwf3e3fff0/images/signin-wall/heros/gadget-6.png" alt="Card image cap">
  <div class="card-body">
  <h2 class="bold"></h2>
  <a href="added-books.php" class="btn btn-danger">View My Ads</a>
  </div>
 
  </div>
  </div>

                
</div>
</section>
</div>


  



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/2392c4c722.js" crossorigin="anonymous"></script>
</body>
</html>