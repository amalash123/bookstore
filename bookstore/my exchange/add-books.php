<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Add Books</title>
</head>
<body>
<header class="bg-info " style="position: fixed; width: 100%; z-index: 1;">
    <div class="container-fluid">
      <div class="row  text-white">
          <div class="col-md-11 col-9 p-3 pl-5">
           <H2>Add Your Books</H2>
          </div>
          <div class="col-md-1 col-3 p-3 pl-5">
          <a href="my-exchange.php"class="btn btn-light">Back</a>
          </div>
          </div>
          </div>
</header>          
   
<div class="container-fluid " style="padding-top:6rem">
<?php require_once 'process.php'; ?>
    <?php
    if (isset($_SESSION['message'])):?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
        </div>
        <?php endif ?>
        
    <?php
    $mysqli = new mysqli('localhost','root','','bookstore') or die(mysqli_error($mysqli));
    $RESULT = $mysqli->query("SELECT * FROM exchange") or die(mysqli_error($mysqli));
    ?>
   
   
    <div class="row justify-content-center" >
    <form action="process.php" method="POST" enctype="multipart/form-data">
    <div class="form-group mt-3">
        
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" placeholder="Enter Name of Book">
    </div>
    <div class="form-group">
        <label>Author</label>
        <input type="text" name="author" class="form-control" value="<?php echo $author; ?>" placeholder="Author">
    </div>  
    <div class="form-group">
        <label>Description</label>
        <input type="text" name="description" class="form-control"  placeholder="Add your description">
    </div>    
    <div class="form-group">   
        <label>Price</label>
        <input type="text" name="price" class="form-control" value="<?php echo $price; ?>" placeholder="Price">
    </div> 
    <div class="form-group">   
        <label>Mobile</label>
        <input type="tel" name="mobile" class="form-control" value="<?php echo $price; ?>" placeholder="Mobile Number">
    </div> 
    <div class="form-group">
    <label>Image</label>
        <input type="file" name="file" id="file" class="form-control"  >
    </div> 

    <div class="form-group"> 
        <button type="submit" class="btn btn-primary" name="save">Save</button>
    </div>    
    </form>
</div>
</div>
















    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2392c4c722.js" crossorigin="anonymous"></script>
</body>
</html>