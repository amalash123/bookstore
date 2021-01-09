<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Fiction</title>
</head>
<body>
<header class="bg-info " style="position: fixed; width: 100%; z-index: 1;">
    <div class="container-fluid">
      <div class="row  text-white">
          <div class="col-md-11 col-9 p-3 pl-5">
           <H2>Books In Fiction</H2>
          </div>
          <div class="col-md-1 col-3 p-3 pl-5">
          <a href="../book-management.php"class="btn btn-light">Back</a>
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
    $RESULT = $mysqli->query("SELECT * FROM books WHERE category = 'fiction' ORDER BY book_id ASC") or die(mysqli_error($mysqli));
    ?>
    <div class="row justify-content-center">
        <table class="table">
            <thead>
                <tr>

                  
                    <th>Name</th>
                    <th>Author</th>
                    <th>Descrption</th>
                    <th>Price</th>
                 
                    <th colspan="2">Action</th>
                    </tr>
                </thead>
<?php
        while($row = $RESULT->fetch_assoc()):?>
        <tr>
            <td><?php echo $row['name']; ?> </td>
            <td><?php echo $row['author']; ?> </td>
            <td><?php echo $row['description']; ?> </td>
            <td><?php echo $row['price']; ?> </td>
        
            <td>
                
                <a href="process.php?delete=<?php echo $row['book_id']; ?>"
                class="btn btn-danger">Delete</a>

            </td>
        </tr> 
        <?php endwhile; ?>
        </table>
</div>

    <?php
    function pre_r($array)
    {
        echo '<pre>';
        print_r($array);
        echo '</pre>';

        
    }
    
    
    ?>
    














    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2392c4c722.js" crossorigin="anonymous"></script>
</body>
</html>