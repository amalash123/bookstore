<?php
  ob_start();

  
?> 
<?php  


 
 
if(isset($_POST['submit'])){
	 
	 
	$orderid = $_POST['orderid'];
    $reason = $_POST['reason'];
	$status = $_POST['status'];; 
	$con = mysqli_connect('localhost',"root" ,"" ,"bookstore");
    $insertCancel = "INSERT INTO ordersTracking (orderid, status, reason )
	VALUES ('$orderid', '$status', '$reason')";  
 
	if(mysqli_query($con, $insertCancel)){
        $up_sql = "UPDATE orders SET orderstatus='$status'  WHERE id=$orderid";
    mysqli_query($con, $up_sql);
 header('location:orders.php');

    }
 

}
 

 


// $cid =$_SESSION['customerid'];

// $sql = "SELECT * FROM user_data where userid = $cid";
// $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);


 ?>



 
 

<div class="container text-white">

<?php
// echo "<pre>";
// print_r($_SESSION['cart']);
// echo "</pre>";



// if(isset($_SESSION['cart'])){
	$total = 0;
	// foreach($cart as $key => $value){
	 // echo $key ." : ". $value['quantity'] . "<br>";
	 
	//  $sql_cart = "SELECT * FROM products where product_id = $key";
	// $result_cart = mysqli_query($conn, $sql_cart);
	// $row_cart = mysqli_fetch_assoc($result_cart);
	// $total = $total +  ($row_cart['price'] * $value['quantity']);
// }
// }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>STATUS</title>
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

  <header class="" style="position: fixed; width: 100%; z-index: 1; ">
        <div class="container-fluid">
          <div class="row  text-white">
              <div class="col-md-12 col-9 p-3 ">
               <H2></H2>
              </div>
              </header>

    <section id="content">
		<div class="content-blog">
					<div class="page_header text-center  ">
						<h2>Change Status</h2>
						 
					</div>
<form method='post'>
 
<div class="container ">
			<div class="row">
				<div class="offset-md-2 col-md-8" style="padding-top:4rem">
					<div class="billing-details">
                    <table class="cart-table account-table table table-bordered bg-white text-dark">
				<thead>
					<tr>
						<th>Product</th>
						<th>Price</th>
						<th>price</th>
						<th>Total Price</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				<?php
				// $c_id = $_SESSION['customerid'];

 if(isset($_GET['id'])){
     $o_id = $_GET['id'];
 }


 
 $con = mysqli_connect('localhost',"root" ,"" ,"bookstore");
				$sql = "SELECT * FROM orders WHERE id='$o_id'";
				$result = mysqli_query($con, $sql);
			  
				if (mysqli_num_rows($result) > 0) {
			 
				 while($row = mysqli_fetch_assoc($result)) {
                
 			?>
					<tr>
						<td>
						<?php 
						$con = mysqli_connect('localhost',"root" ,"" ,"bookstore");
                        $sql_proID = "SELECT * FROM ordersItems WHERE orderid='$o_id'";
                        $result_proID = mysqli_query($con, $sql_proID);
                        $row_prodID = mysqli_fetch_assoc($result_proID);
                        $p_id =  $row_prodID['bookid'];

                        $sql_ProName = "SELECT * FROM books WHERE book_id='$p_id'";
                        $result_ProName = mysqli_query($con, $sql_ProName);
                        $row_ProName = mysqli_fetch_assoc($result_ProName);
                        echo  $row_ProName['name'];
                        ?>

                        
						</td>
						<td>
						<?php echo $row["totalprice"] ?>
						</td>
						<td>
						<?php echo $row["orderstatus"] ?>		
						</td>
						<td>
						<?php echo $row["paymentmode"]  ?>		
						</td>
					 
					</tr>
				 
			
			<?php
				}
			   } else {
				 echo "0 results";
			   }
			 
			 
			 ?>




				
				</tbody>
             
			</table>
						<div class="space30"></div>
					 
						 
                        <div class="form-group">
  <label for="sel1">Change Status:</label>
  <select class="form-control" name="status">
    <option value='In Progress'>In Progress</option>
    <option value='Dispatched'>Dispatched</option>
    <option value='Delivered'>Delivered</option>
  </select>
</div>
						 
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
                <input type='submit' name='submit' value='Change Status' class="btn">
            </div>
        </div>
		
		</div>
	</section>
</div>

</form>







<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2392c4c722.js" crossorigin="anonymous"></script>
</body>
</html>


