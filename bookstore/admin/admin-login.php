<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
     <link href="css/admin-login-style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
    <h1 id="head-name">
        BOOKAHOLIC
        <h3 id="head-name">The Online Bookstore </h3>
</h1>
    <div class="login-box">
<div class="row">
<div class="col-md-6">
<h2>Admin Log in  Panel</h2>
<form action="validation.php" method="post">
<div class="form-group">
<label>Username</label>
<input type="text" name="user" class="form-control" required>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
</div>
 </div>
</body>
</html>