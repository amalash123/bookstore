<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>View All Users</title>
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
        </style>
</head>
<body>
<header class="bg-primary " style="position: fixed; width: 100%; z-index: 1;">
    <div class="container-fluid">
      <div class="row  text-white">
          <div class="col-md-10 col-9 p-3 pl-5">
           <H2>View All Users</H2>
          </div>
          <div class="col-md-2 col-3 p-3 pl-5">
          <a href="admin.php"class="btn btn-light"><i class="fa fa-home"></i>Home</a>
          </div>
          </div>
          </div>
</header>          
   
<div class="container-fluid " style="padding-top:6rem">

    <?php
    $mysqli = new mysqli('localhost','root','','bookstore') or die(mysqli_error($mysqli));
    $RESULT = $mysqli->query("SELECT * FROM user_data ") or die(mysqli_error($mysqli));
    ?>
   <div class="container ">


<div class="card-body" style="padding-top:1rem">
<section id="content ">
	<div class="content-blog  bg-white">
		<div class="container">
			<table class="table table-striped">
            <thead>
                <tr>

                  
                    <th>Name</th>
                    <th>Company</th>
                    <th>Address</th>
                    <th>City</th>
                 
                    <th >Mobile</th>
                    </tr>
                </thead>
                <tbody>
<?php
        while($row = $RESULT->fetch_assoc()):?>
        <tr>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['company']; ?> </td>
            <td><?php echo $row['address1']; ?> </td>
            <td><?php echo $row['city']; ?> </td>
            <td><?php echo $row['mobile']; ?> </td>
        
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
    

</div>
</section>
</div>












    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2392c4c722.js" crossorigin="anonymous"></script>
</body>
</html>