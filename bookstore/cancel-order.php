



<?php  
 session_start();

 $con = mysqli_connect('localhost',"root" ,"" ,"bookstore");
 $s = "select * from login ";
 $result = mysqli_query($con,$s);
if(!isset($_SESSION['username']) && empty($_SESSION['username']) ){
 header('location:login.php');
}

 
if(!isset($_SESSION['customerid'])){
	echo '<script>window.location.href = "login/main-login.php";</script>';

}

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
 


$message  = '';
$_POST['agree'] = 'false';

if(isset($_POST['submit'])){
	 
	$conn = mysqli_connect('localhost', 'root', '' , 'bookstore'); 
	$orderid = $_POST['orderid'];
    $reason = $_POST['reason'];
    $status = 'cancelled';

 
    $insertCancel = "INSERT INTO ordersTracking (orderid, status, reason )
	VALUES ('$orderid', '$status', '$reason')";  

	if(mysqli_query($conn, $insertCancel)){
    $up_sql = "UPDATE orders SET orderstatus='Cancelled'  WHERE id=$orderid";
 mysqli_query($conn, $up_sql);
 header('location:myaccount.php');

    }
//   update query
// $up_sql = "UPDATE user_data SET firstname='$fname', lastname='$lname', company='$companyName', address1='$addr1', address2='$addr2', city='$city', country='$country', zip='$Postcode', mobile='$Phone'  WHERE userid=$cid";

// $Updated = mysqli_query($conn, $up_sql);
     
 

}
 

 


$cid =$_SESSION['customerid'];
$conn = mysqli_connect('localhost', 'root', '' , 'bookstore');
$sql = "SELECT * FROM user_data where userid = $cid";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Checkout</title>
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
<?php
 //echo $_SESSION['username'];
 //echo $_SESSION['customerid'];
 ?>
<header class="" style="position: fixed; width: 100%; z-index: 1; background: linear-gradient(45deg, green,rgb(223, 148, 50));">
        <div class="container-fluid">
          <div class="row  text-white">
              <div class="col-md-5 col-9 p-3 pl-5">
               <H2>Checkout</H2>
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
  <i class="fa fa-user-circle" > </i><?php echo $_SESSION['username']; ?>
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

<?php
// echo "<pre>";
// print_r($_SESSION['cart']);
// echo "</pre>";



if(isset($_SESSION['cart'])){
	$total = 0;
	foreach($cart as $key => $value){
	 // echo $key ." : ". $value['quantity'] . "<br>";
	 
	 $sql_cart = "SELECT * FROM books where book_id = $key";
	$result_cart = mysqli_query($conn, $sql_cart);
	$row_cart = mysqli_fetch_assoc($result_cart);
	$total = $total +  ($row_cart['price'] * $value['quantity']);
}
}



?>

    <section id="content">
		<div class="content-blog">
					<div class="page_header text-center  py-5">
						<h2>Cancel Order</h2>
						 
					</div>
<form method='post'>
<?php echo $message ?>
<div class="container ">
			<div class="row">
				<div class="offset-md-2 col-md-8">
					<div class="billing-details">
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

 $conn = mysqli_connect('localhost',"root" ,"" ,"bookstore");
 $sql_orders = "SELECT * FROM orders WHERE id='$o_id' AND userid='$c_id'";
 $result_orders = mysqli_query($conn, $sql_orders);

 $row_orders = mysqli_fetch_assoc($result_orders);
 $conn = mysqli_connect('localhost',"root" ,"" ,"bookstore");
				$sql = "SELECT * FROM ordersItems WHERE orderid='$o_id'";
				$result = mysqli_query($conn, $sql);
			  
				if (mysqli_num_rows($result) > 0) {
			 
				 while($row = mysqli_fetch_assoc($result)) {
                  $prodID = $row["bookid"] 
 			?>
					<tr>
						<td>

                        <?php 
                        
 $conn = mysqli_connect('localhost',"root" ,"" ,"bookstore");
                        $sql_product = "SELECT * FROM books  WHERE book_id='$prodID'";
                        $result_prod = mysqli_query($conn, $sql_product);
                      
                     $row_prod = mysqli_fetch_assoc($result_prod);
                     
                      
                        
                        ?>


<a href="single.php?id=<?php echo $prodID ;?>"><?php echo $row_prod['name'];?></a>
					 
						</td>
						<td>
						<?php echo $row["quantity"] ?>
						</td>
						<td>
						<?php echo  $row_prod ["price"] ?>		
						</td>
						<td>
						<?php echo  $row ["quantity"] *  $row_prod ["price"] ?>		
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
						<th><?php echo  $row_orders['timestamp'] ?></th>
					</tr>
				</tfooer>
			</table>
						<div class="space30"></div>
					 
						 
				 
						 
							<div class="clearfix space20"></div>
							<label>Reason</label>
 						 <textarea class="form-control" name='reason' id="" cols="30" rows="10"></textarea>
					 
					 
					</div>
				</div>
				
			 
			</div>
			
		 
	 
		 
        </div>		
        
        <div class="row">
            <div class="col-md-12 text-center">
                <input type="hidden" name='orderid' value='<?php echo $_GET['id'] ?>'>
                <input type='submit' name='submit' value='Cancel Order' class="btn">
            </div>
        </div>
		
		</div>
	</section>
</div>

</form>










