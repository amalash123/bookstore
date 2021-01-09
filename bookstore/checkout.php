<?php 


session_start();


if(!isset($_SESSION['username']) && empty($_SESSION['username']) ){
header('location:login/login.php');
}
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



<?Php //echo '<pre>';
 //print_r($_POST);
//echo '</pre>';
$message ='';
$_POST['agree'] = 'false';

if(isset($_POST['submit'])){
	 
	 if($_POST['agree'] == true){
	 $country = $_POST['country'];
	 $fname = $_POST['fname'];
	 $lname = $_POST['lname'];
	 $companyName = $_POST['companyName'];
	 $addr1 = $_POST['addr1'];
	 $addr2 = $_POST['addr2'];
	 $city = $_POST['city'];
	 $state = '';
	 $Postcode = $_POST['Postcode'];
	 $Email = '';
	 $Phone = $_POST['Phone'];
	 $payment = $_POST['payment'];
	 $agree = $_POST['agree'];
	 $cid = $_SESSION['customerid']; 

	 $con = mysqli_connect('localhost',"root" ,"" ,"bookstore");
	 $sql = "SELECT * FROM user_data where userid = $cid";
 $result = mysqli_query($con, $sql);
 $row = mysqli_fetch_assoc($result);
 
 
 if (mysqli_num_rows($result) == 1) {
 //   update query
 $up_sql = "UPDATE user_data SET firstname='$fname', lastname='$lname', company='$companyName', address1='$addr1', address2='$addr2', city='$city', country='$country', zip='$Postcode', mobile='$Phone'  WHERE userid=$cid";
 
 $Updated = mysqli_query($con, $up_sql);
 if($Updated){
	if(isset($_SESSION['cart'])){
		$total = 0;
		foreach($cart as $key => $value){
		 // echo $key ." : ". $value['quantity'] . "<br>";
		 $con = mysqli_connect('localhost',"root" ,"" ,"bookstore");
		 $sql_cart = "SELECT * FROM books where book_id = $key";
		$result_cart = mysqli_query($con, $sql_cart);
		$row_cart = mysqli_fetch_assoc($result_cart);
		$total = $total +  ($row_cart['price'] * $value['quantity']);
	}
	}
	$con = mysqli_connect('localhost',"root" ,"" ,"bookstore");
	$insertOrder = "INSERT INTO orders (userid, totalprice, orderstatus, paymentmode )
	VALUES ('$cid', '$total', 'Order Placed', '$payment')";  

		if(mysqli_query($con, $insertOrder)){
	 
			$orderid = mysqli_insert_id($con); 
			foreach($cart as $key => $value){ 
				$sql_cart = "SELECT * FROM books where book_id = $key";
			   $result_cart = mysqli_query($con, $sql_cart);
			   $row_cart = mysqli_fetch_assoc($result_cart); 
				$price_product = $row_cart["price"];
				 $q  = $value["quantity"];
			   $insertordersItems = "INSERT INTO ordersItems (orderid, bookid, quantity, bookprice) 
				VALUES ('$orderid', '$key', '$q', '$price_product')";
			   
			   if(mysqli_query($con, $insertordersItems)){
				//    echo 'inserted on both table orders and ordersItems';
				unset($_SESSION['cart']);
				// header("location:myaccount.php");
				echo '<script>window.location.href = "myaccount.php";</script>';
	
			
			   }
	
	
		   }
	
		
	
		}
 }
}
 else{
	$ins_sql = "INSERT INTO user_data (userid, firstname, lastname, company, address1, address2, city, country, zip, mobile)
	VALUES ('$cid', '$fname', '$lname', '$companyName', '$addr1', '$addr2', '$city', '$country', '$Postcode', '$Phone')"; 
 $inserted = mysqli_query($con, $ins_sql);
 if($inserted){
	// echo 'order table and order items - inserted';
	
	if(isset($_SESSION['cart'])){
		$total = 0;
		foreach($cart as $key => $value){
		 // echo $key ." : ". $value['quantity'] . "<br>";
		 
		 $sql_cart = "SELECT * FROM books where book_id = $key";
		$result_cart = mysqli_query($con, $sql_cart);
		$row_cart = mysqli_fetch_assoc($result_cart);
		$total = $total +  ($row_cart['price'] * $value['quantity']);
	}
	}


	// echo 'order table and order items - updated';

	$insertOrder = "INSERT INTO orders (userid, totalprice, orderstatus, paymentmode )
	VALUES ('$cid', '$total', 'Order Placed', '$payment')";  

	if(mysqli_query($con, $insertOrder)){
	 
		$orderid = mysqli_insert_id($con); 
		foreach($cart as $key => $value){ 
			$sql_cart = "SELECT * FROM books where book_id = $key";
		   $result_cart = mysqli_query($con, $sql_cart);
		   $row_cart = mysqli_fetch_assoc($result_cart); 
			$price_product = $row_cart["price"];
			 $q  = $value["quantity"];
		   $insertordersItems = "INSERT INTO ordersItems (orderid, productid, quantity, productprice) 
		    VALUES ('$orderid', '$key', '$q', '$price_product')";
		   
		   if(mysqli_query($con, $insertordersItems)){
			//    echo 'inserted on both table orders and ordersItems';
			unset($_SESSION['cart']);
			// header("location:myaccount.php");
			echo '<script>window.location.href = "myaccount.php";</script>';

		
		   }


	   }

	

	}
}

}

	 }else{
		 $message = 'agree to terms and conditions';
	 }
	}
	?>
					<?php 
//echo "<pre>";
//print_r($_SESSION['cart']);
//echo "</pre>";

	$total = '0';
	





?>
		



	<form method='post'>
<?php //echo $message ?>
<div class="container ">



			<div class="row">
				<div class="offset-md-2 col-md-8  ">
					<div class="billing-details mt-5" style="padding-top:5rem;">
						<h3 class="uppercase">Billing Details</h3>
						<div class="space30"></div>
				 
							<label class="">Country </label>
							<select class="form-control" name='country'>
								<option value="">Select Country</option>
								<option value="AX">Aland Islands</option>
								<option value="AF">Afghanistan</option>
								<option value="AL">Albania</option>
								<option value="DZ">Algeria</option>
								<option value="AD">Andorra</option>
								<option value="AO">Angola</option>
								<option value="AI">Anguilla</option>
								<option value="AQ">Antarctica</option>
								<option value="AG">Antigua and Barbuda</option>
								<option value="AR">Argentina</option>
								<option value="AM">Armenia</option>
								<option value="AW">Aruba</option>
								<option value="AU">Australia</option>
								<option value="AT">Austria</option>
								<option value="AZ">Azerbaijan</option>
								<option value="BS">Bahamas</option>
								<option value="BH">Bahrain</option>
								<option value="BD">Bangladesh</option>
								<option value="BB">Barbados</option>
							</select>
							<div class="clearfix space20"></div>
							<div class="row">
								<div class="col-md-6">
									<label>First Name </label>
									<input class="form-control" name='fname' placeholder="" value="<?php if(isset($row['firstname'])) { echo $row['firstname']; } ?>" type="text">
								</div>
								<div class="col-md-6">
									<label>Last Name </label>
									<input class="form-control" name='lname' placeholder="" value="<?php if(isset($row['lastname'])) {echo $row['lastname']; } ?>" type="text">
								</div>
							</div>
							<div class="clearfix space20"></div>
							<label>Company Name</label>
							<input class="form-control" name='companyName' placeholder="" value="<?php if(isset($row['company'])) {echo $row['company']; } ?>" type="text">
							<div class="clearfix space20"></div>
							<label>Address </label>
							<input class="form-control" name='addr1' placeholder="Street address" value="<?php if(isset($row['address1'])) {echo $row['address1']; } ?>" type="text">
							<div class="clearfix space20"></div>
							<input class="form-control" name='addr2' placeholder="Apartment, suite, unit etc. (optional)" value="<?php if(isset($row['address2'])) {echo $row['address2'];  } ?>" type="text">
							<div class="clearfix space20"></div>
							<div class="row">
								<div class="col-md-4">
									<label>Town / City </label>
									<input class="form-control" name='city' placeholder="Town / City" value="<?php if(isset($row['city'])) {echo $row['city']; } ?>" type="text">
								</div>
 
								<div class="col-md-4">
									<label>Postcode </label>
									<input class="form-control" name='Postcode' placeholder="Postcode / Zip" value="<?php if(isset($row['zip'])) {echo $row['zip']; } ?>" type="text">
								</div>
							</div>
							<div class="clearfix space20"></div>
							<!-- <label>Email Address </label>
							<input class="form-control" name='Email' placeholder="" value="-" type="text"> -->
							<div class="clearfix space20"></div>
							<label>Phone </label>
							<input class="form-control" name='Phone'  id="billing_phone" placeholder="" value="<?php if(isset($row['mobile'])) {echo $row['mobile']; } ?>" type="text">
						 
					</div>
				</div>
				
			 
			</div>
			
			<div class="space30"></div>
			<h4 class="heading">Your order</h4>
			
			<table class="table table-bordered extra-padding bg-white text-dark">
				<tbody>
					<tr>
						<th>Cart Subtotal</th>
						<td><span class="amount"><?php if(!isset($_SESSION['cart']) && empty($_SESSION['cart']) )
				{
	
	$total ='0';
	
		$cart='';
		
	  }
	  else
	  {
	foreach($cart as $key => $value){
	 // echo $key ." : ". $value['quantity'] . "<br>";
	
	 $con = mysqli_connect('localhost',"root" ,"" ,"bookstore");
	 $sql_cart = "SELECT * FROM books where book_id = $key";
	$result_cart = mysqli_query($con, $sql_cart);
	$row_cart = mysqli_fetch_assoc($result_cart);
	$total = $total +  ($row_cart['price'] * $value['quantity']);
}

}
						
						 echo $total?>.00/-</span></td>
					</tr>
					<tr>
						<th>Shipping and Handling</th>
						<td>
							Free Shipping				
						</td>
					</tr>
					<tr>
						<th>Order Total</th>
						<td><strong><span class="amount"><?php echo $total?>.00/-</span></strong> </td>
					</tr>
				</tbody>
			</table>
			
			<div class="clearfix space30"></div>
			<h4 class="heading">Payment Method</h4>
			<div class="clearfix space20"></div>
			
			<div class="payment-method mt-5">
             
				<div class="row d-flex">
				
						<div class="col-md-4">
							<input name="payment" value='COD'  id="radio1" class="mr-2 css-checkbox" type="radio"><span>COD</span>
							<div class="space20"></div>
							<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
						</div>

						<div class="col-md-4">
							<input name="payment" value='Paypal'  id="radio3" class="mr-2 css-checkbox" type="radio"><span>Paypal</span>
							<div class="space20"></div>
							<p>Pay via PayPal; you can pay with your credit card if you don't have a PayPal account</p>
						</div>

						<div class="col-md-4">
							<input name="payment" value='Cheque'  id="radio2" class="mr-2 css-checkbox" type="radio"><span>Cheque Payment</span>
							<div class="space20"></div>
							
						</div>
					
                </div>
           
				<div class="space30"></div>
			 
					<input name="agree" value='true' id="checkboxG2" class="mr-2 css-checkbox " type="checkbox"><span>I've read and accept the <a href="#">terms &amp; conditions</a></span>
			 
				<div class="space30"></div>
				<a href="#" class="button btn-lg">Pay Now</a>
			</div>
        </div>		
        
        <div class="row">
            <div class="col-md-12 text-center">
                <input type='submit' name='submit' value='Pay Now' class="btn">
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

