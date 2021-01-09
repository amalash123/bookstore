<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
     <link href="login-style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
    <h1 id="head-name">
        BOOKAHOLIC
        <h3 id="head-name">The Online Bookstore </h3>
        
</h1>


            <?php
            if(isset($_REQUEST['message'])){
                if($_GET['message'] == '1'){ 
 ?>

    <div class=" alert alert-danger text-center" ><h3>Invalid Credential</h3></div>

    <?php

 unset($_REQUEST['message']);
}
}
?>

    <div class="login-box">
<div class="row">
<div class="col-md-6">
<h2>Log in  Here</h2>
<form action="main-validation.php" method="post">
<div class="form-group">
<label>Username</label>
<input type="text" name="user" class="form-control" required>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>
<tr>
<button type="submit" class="btn btn-primary">Login</button>
<p>
<h7 >New to Bookaholic
    <br>
<a href="main-signup.php">Sign up Here!!</a></h7>
</P>
</tr>
</form>

</div>
</div>

 </div>
 
</body>
</html>