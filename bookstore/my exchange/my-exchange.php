<?php
session_start();
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
                    
                      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                          <li class="nav-item active">
                            <a class="nav-link text-white " href="#about" >Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="#">Go to Cart</a>
                          </li>
                          <li class="nav-item ">
                              <a class="nav-link text-white" href="../home.php">Back</a>
                            </li>
                           
                            
                          
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
                <div class="card" style="width: 15rem; height: 15rem; margin-top: 8rem;">
  <img class="card-img-top" src="data:image/jpeg;base64,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" alt="Card image cap">
  <div class="card-body">
 
  <a href="add-books.php" class="btn btn-success">ADD BOOKS FOR EXCHANGE</a>
  </div>
  </div>
  </div>



  <div class="col-md-3 mt-3 ">
                <div class="card" style="width: 15rem; height: 15rem; margin-top: 8rem;">
  <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStfZNFzBeAl2NyD_hFP1ZoSBW7dPXEVOQl-A&usqp=CAU" alt="Card image cap">
  <div class="card-body">
  <h2 class="bold">THRILLER</h2>
  
  </div>
  <a href="added-books.php" class="btn btn-success">View My Exchanges</a>
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