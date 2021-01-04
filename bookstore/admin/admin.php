<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Admin</title>
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
               <H2>Welcome Admin</H2>
              </div>
              <div class="col-md-6 col-3 my-auto ml-auto">
                  <nav class="navbar navbar-expand-lg navbar-light ">
                    
                      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                          <li class="nav-item active">
                            <a class="nav-link text-white " href="../login/login.php" >Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="#">Go to Cart</a>
                          </li>
                          <li class="nav-item ">
                              <a class="nav-link text-white" href="#Education">Exchange Portal</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link  text-white" href="admin-login.php">Log out</a>
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
            <div class="card" style="width: 15rem; height: 15rem; margin-top: 10rem;">
                <img class="card-img-top" src="https://gladeofblades.files.wordpress.com/2011/12/calibre.jpg" alt="Card image cap">
                <div class="card-body">
                <a href="book-management.php" class="btn btn-success">MANAGE BOOKS</a>
                </div>
              </div>
             </div>

             <div class="col-md-3 mt-3 ">
                <div class="card" style="width: 15rem;height: 15rem; margin-top: 10rem;">
                    <img class="card-img-top" src="data:image/jpeg;base64,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" alt="Card image cap">
                    <div class="card-body">
                    <a href="../admin-books.php" class="btn btn-success">ADD BOOKS</a>
                    </div>
                  </div>
                 </div>

                 <div class="col-md-3 mt-3 ">
                    <div class="card" style="width: 15rem;height: 15rem; margin-top: 10rem;">
                        <img class="card-img-top" src="https://previews.123rf.com/images/jovanas/jovanas1610/jovanas161001555/64882666-exchange-arrow-icon.jpg" alt="Card image cap">
                        <div class="card-body">
                          <a href="#" class="card-link">Exchange Section</a>
                        </div>
                      </div>
                     </div>

                     <div class="col-md-3 mt-3 ">
                        <div class="card" style="width: 15rem;height: 15rem; margin-top: 10rem; ">
                            <img class="card-img-top" src="data:image/png;base64,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" alt="Card image cap">
                            <div class="card-body">
                                <P>
                              <a href="#" class="card-link">Payment Details</a>
                            </P>
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