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
    <title>Comic</title>
    <style>
        body{
           
            margin:0;
                background:#b8b8ff;
        }
       .info
       {
           height:100%;
           width:100% ;
           color:white;
       }
       


    </style>
</head>
<body>
    <header class="" style="position: fixed; width: 100%; z-index: 1; background: linear-gradient(45deg, green,rgb(223, 148, 50));">
        <div class="container-fluid">
          <div class="row  text-white">
              <div class="col-md-10 col-9 p-3 pl-5">
               <H2>Comic</H2>
              </div>
              <div class="col-md-2 col-3 p-3 pl-5">
              <a href=""class="btn btn-success ">Cart</a>
              <a href=""class="btn btn-success">Back</a>
              </div>
              </div>
              </div>
    </header>
    <section class="" >
    <div class="container " style="padding-top:10rem";>
   
        <div class="row ">
            <div class="col-sm-3 ">
            <div class="info text-center">
                <table class="sidebar ">
                    <tr><td>USEFUL LINKS</td></tr>
                    <tr><td><a href="">THRILLER</a></td></tr>
                    <tr><td><a href="">ROMANCE</a></td></tr>
                    <tr><td><a href="">FANTASY</a></td></tr>
                    <tr><td><a href="">ACTION</a></td></tr>
                    <tr><td><a href="">NOVEL</a></td></tr>
                </table>
    </div>
            </div>
    
            <div class="col-sm-9">
                <div class="tag" style="width: 100%; display: inline-table; height: 30px; background: dimgray; text-align: center; font: bold; color: white;">BEST SELLERS</div>
                <div class="row mt-4">
                <?php
   $mysqli = new mysqli('localhost','root','','bookstore') or die(mysqli_error($mysqli));
   $RESULT = $mysqli->query("SELECT * FROM books WHERE category = 'comic' ORDER BY book_id ASC") or die(mysqli_error($mysqli));
   while($row = $RESULT->fetch_assoc()):?>
        
            
            <div class="col-md-4 pb-3">
                    <div class="card">
                    <div class="card-body">
                    <img src="<?php echo $row['image'];?>" height="200px" width="100%">
                    <h5 style="font-size:x-smaller"> <?php echo $row['name']; ?> </h5>
          <h5 style="font-size:medium">by <?php echo $row['author']; ?> </h5>  
           
          <h5 style="font-size:larger; color:red;"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $row['price']; ?> </h5> 
          <a href="process.php?delete=<?php echo $row['book_id']; ?>"
          class="btn btn-danger">DELETE</a>
                        </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>  
</section>    
<footer class=" pt-3 mt-4" style=" background:linear-gradient(45deg,
#b91eda,
#a02ae0,
#8234e5,
#5d3be8,
#c012eb    

);">
  <div class="container-fluid"></div>
    <div class="row">
      <div class="col-md-12 text-center text-white">
        <h6>Follow Me Here</h6>
        <h3>
          <a href="https://www.linkedin.com/in/amalash-k-b0a4651a9/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          <a href="https://github.com/amalash123"><i class="fa fa-github" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/a.m.a.l.a.s.h/"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>

        
        </h3>



      </div>
    </div>
  </div>


</footer>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2392c4c722.js" crossorigin="anonymous"></script>
</body>
</html>