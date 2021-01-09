<?php 

$conn = mysqli_connect('localhost',"root" ,"" ,"bookstore");
 

 
 



?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Your Order</title>
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
               <H2>Your Order</H2>
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
  <i class="fa fa-user-circle" > </i><?php
  $con = mysqli_connect('localhost',"root" ,"" ,"bookstore");
  $s = "select * from login ";
  $result = mysqli_query($con,$s);
  session_start();
   echo $_SESSION['username']; ?>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="logout.php">Log out</a>
   
  </div>
</div>
                   
                  <div class="dropdown">
  <a class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Continue shopping!
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="action.php">Action</a>
	<a class="dropdown-item" href="comic.php">Comic</a>
    <a class="dropdown-item" href="fantasy.php">Fantasy</a>
    <a class="dropdown-item" href="fiction.php">Fiction</a>
    <a class="dropdown-item" href="horror.php">Horror</a>
    <a class="dropdown-item" href="thriller.php">Thriller</a>
  </div>
</div>
                   
<li class="nav-item">
                      <a class="nav-link  text-white" href="cart.php">Back</a>
                    </li> 
                </ul>
                
              </div>
            </nav>
             
              </div>
              </div>
              </div>
    </header>
 
 
<div class="container text-white">
    <h2 class='text-center text-white'>My Account</h2>

    <section id="content">
		<div class="content-blog content-account">
			<div class="container">
				<div class="row">
				 
					<div class="col-md-12">

			<h3>Recent Orders</h3>
			<br>
			<table class="cart-table account-table table table-bordered bg-white text-dark">
				<thead>
					<tr>
						<th>Product</th>
						<th>Quantity</th>
						<th>price</th>
						<th>Total Price</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				<?php
				$c_id = $_SESSION['customerid'];

 if(isset($_GET['id'])){
     $o_id = $_GET['id'];
 }


 $sql_orders = "SELECT * FROM orders WHERE id='$o_id' AND userid='$c_id'";
 $result_orders = mysqli_query($conn, $sql_orders);

 $row_orders = mysqli_fetch_assoc($result_orders);
  
				$sql = "SELECT * FROM ordersItems WHERE orderid='$o_id'";
				$result = mysqli_query($conn, $sql);
			  
				if (mysqli_num_rows($result) > 0) {
			 
				 while($row = mysqli_fetch_assoc($result)) {
                  $bookID = $row["bookid"] 
 			?>
					<tr>
						<td>

                        <?php 
                        
                        $sql_product = "SELECT * FROM books  WHERE book_id='$bookID'";
                        $result_prod = mysqli_query($conn, $sql_product);
                      
                     $row_prod = mysqli_fetch_assoc($result_prod);
                     
                      
                        
                        ?>


<a href="single.php?id=<?php echo $bookID ;?>"><?php echo $row_prod['name'];?></a>
					 
						</td>
						<td>
						<?php echo $row["quantity"] ?>
						</td>
						<td>
						<?php echo  $row_prod["price"] ?>		
						</td>
						<td>
						<?php echo $row["quantity"] *  $row_prod["price"] ?>		
						</td>
					 
					</tr>
				 
			
			<?php
				}
			   } else {
				 echo "0 results";
			   }
			 
			 
			 ?>




				
				</tbody>
                <tfooer>
					<tr>
						 
						<th></th>
						<th></th>
						<th>Total Price</th>
						<th><?php echo  $row_orders['totalprice'] ?></th>
					</tr>
                    <tr>
					 
						<th></th>
						<th></th>
						<th>Order Status</th>
						<th><?php echo  $row_orders['orderstatus'] ?></th>
					</tr>
                    <tr>
					 
						<th></th>
						<th></th>
						<th>Date</th> 
						<th><?php echo date('M j g:i A', strtotime($row_orders["timestamp"]));  ?></th>
					</tr>
				</tfooer>
			</table>		

		 

			<div class="ma-address">
						<h3>My Addresses</h3>
						<p>The following addresses will be used on the checkout page by default.</p>

			<div class="row  bg-white text-dark px-5 py-3">
				<div class="col-md-6">
								<h4>Billing Address <a href="update_address.php?id=<?php echo $c_id ?>">Edit</a></h4>
                                <?php  
                        $sql_add = "SELECT * FROM user_data  WHERE userid='$c_id'";
                        $result_add = mysqli_query($conn, $sql_add);
                      
                     $row_add = mysqli_fetch_assoc($result_add); 
                        echo $row_add['firstname'] ." ". $row_add['lastname'] . "<br>";
                        echo $row_add['company'] . "<br>";
                        echo $row_add['address1'] . "<br>";
                        echo $row_add['address2'] . "<br>";
                        echo $row_add['city'] . "<br>";
                        echo $row_add['zip'] . "<br>";
                        echo $row_add['country'] . "<br>";
                        echo $row_add['mobile'] . "<br>";

                        ?>

 
				</div>

			 
			</div>



			</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	
 
</div>








