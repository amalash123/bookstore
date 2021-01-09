<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
     <link href="signup.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
    <h1 id="head-name">
        BOOKAHOLIC
        <h2 id="head-name">The Online Bookstore </h2>
</h1>
    <div class="login-box">
<div class="row">
<div class="col-md-12">
<h2>Sign in  Here</h2>
<form action="main-registration.php" method="post">
<div class="form-group">

<label>Your Name</label>
<input type="text" name="name" class="form-control" required>
</div>
<div class="form-group">
<label>Username</label>
<input type="text" name="user" class="form-control" required>
</div>
<div class="form-group">
<label>Email Id</label>
<input type="email" name="email" class="form-control" required>
</div>
<div class="form-group">
<label for="phone">Mobile Number</label>
<input type="tel" name="mobile" class="form-control" required>
</div>

<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary">Login</button>
<br>
<h6 class="signin">Already a user?
    <br>
<a href="main-login.php">Login Here!!</a></h6>
</tr>
</form>
</div>
</div>










    </div>
</body>
</html>