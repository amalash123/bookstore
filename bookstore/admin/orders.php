<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>All Orders</title>
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

  <header class="" style="position: fixed; width: 100%; z-index: 1; background: linear-gradient(45deg, green,rgb(223, 148, 50));">
        <div class="container-fluid">
          <div class="row  text-white">
              <div class="col-md-5 col-9 p-3 pl-5">
               <H2>All Orders</H2>
              </div>
              <div class="col-md-7 col-3 p-3 pl-5">
              <nav class="navbar navbar-expand-lg navbar-light ">
              
              
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link text-white " href="admin.php" ><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
                  </li>
                  </ul>
                  </div>
                  </nav>
                  </div>
              </header>


<div class="container ">


<div class="card-body" style="padding-top:8rem">
<section id="content mt-5">
	<div class="content-blog  bg-white">
		<div class="container">
			<table class="table table-striped">
				<thead>
					<tr> 
						<th>Customer Name</th>
						<th>Total Price</th>
						<th>Order Status</th>
						<th>Payment Mode </th>
                        <th>Order Placed On</th>
                        <th>Operations</th> 
					</tr>
				</thead>
				<tbody>

                <?php
                 $con = mysqli_connect('localhost',"root" ,"" ,"bookstore");
    $sql = "SELECT orders.totalprice, orders.orderstatus, orders.paymentmode, orders.timestamp, orders.id, user_data.firstname, user_data.lastname 
     FROM orders JOIN user_data ON orders.userid=user_data.userid ORDER BY `orders`.`id` DESC    ";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

            ?>
      
        <tr>
            <td><?php echo $row["firstname"] ." ".$row["lastname"] ?></td>
            <td><?php echo $row["totalprice"] ?></td>
            <td><?php echo $row["orderstatus"] ?></td>
            <td><?php echo $row["paymentmode"] ?></td>
            <td><?php echo date('M j g:i A', strtotime($row["timestamp"]));  ?>		</td>
            
            <td><a href='order-process.php?id=<?php echo $row["id"] ?>'>Change Status</a> 
            
        </tr>

        
        <?php
        }
      } else {
        echo "0 results";
      }


?>

			 
				</tbody>
			</table>
			
		</div>
	</div>

</section>
</div>
</div>


</div>



