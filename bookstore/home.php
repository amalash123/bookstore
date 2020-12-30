<?php
session_start();
$mysqli = new mysqli('localhost','root','','bookstore') or die(mysqli_error($mysqli));
$RESULT = $mysqli->query("SELECT * FROM login") or die(mysqli_error($mysqli));
$RESULT->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore</title>
    <link href="home-style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
    <div class="header"> 
     
        <div class="menu">
    <ul>
        <li><a href=""><i class="fa fa-home"></i>  Home</a></li>
        <li><a href="">My Account</a>
            <ul>
            <li><a href="login/login.php"><i class="fa fa-user-circle" > </i>  Login</a></li>
            <li><a href="login/signup.php"><i class="fa fa-sign-in" ></i> Signup</a></li>
            <li><a href="admin/admin-login.php"><i class="fa fa-sign-in" ></i> Admin Login</a></li>
        </ul>
        </li>
        <li><a href="">Services</a>
            <UL>
            <li><a href="">Publications</a></li>
            <li><a href="">Give Away</a></li>
            <li><a href="main.html"><i class="fa fa-envelope" ></i>Contact</a></li>
        </ul>
        </li>
        <li><a href="abt.html"><i class="fa fa-info-circle" ></i> About</a></li>
    </ul>
  
  <?php  // ADDING USERNAME FROM DATABASE
  
          #<a class="account">
        # <i class="fa fa-user-circle" > </i>
       # <?php echo $_SESSION['name']; </a>?>
      
   
    <a class="logout" href="logout.php">Logout</a>
</div>
</div>

</div>
<div class="main-body">

    <div class="left">
      
      <h1 class="head">
      BOOKAHOLIC
        </h1>
        <h2 class="motto">
        The Online Bookstore
            <p class="motto2"></p>
        </h2>
        
    </div>
    <div class="right">
      
            <div class="search1">
  <input class="search" type="text"  placeholder=" Search by Name/Author/Category" >
  <i class="fa fa-search" ></i>             
</div>  
                   
        
    </div>

</div>
<div class="links">
   <button class=" btn btn1"><i class="fa fa-shopping-cart" > </i> My Cart</button>
   <button class=" btn btn2"><i class="fa fa-book" aria-hidden="true"> </i> Exchange Section</button>
   <button class=" btn btn3"><i class="fa fa-truck" aria-hidden="true"></i> Orders</button>
   <a href="my exchange/my-exchange.php"><button class=" btn btn4"><i class="fa fa-exchange" aria-hidden="true"> </i> My Exchange</button></a>

</div>
<div class="book-section">
    <div class=" book book1">
<div class="shadow shadow1">
    <center>
<a href="genre-pages/thriller/user-thriller.php">Thriller </a>
<hr />
</center>
</div>
    </div>
    <div class=" book book2">
        <div class="shadow shadow2">
            <center>
                <a href="genre-pages/comic/user-comic.php">Comics</a>
                <hr />
                </center>
    
            </div>
        
    </div>
    <div class=" book book3">
        <div class="shadow shadow3">
            <center>
                <a href="genre-pages/fiction/user-fiction.php">Fiction </a>
                <hr />
                </center>
        </div>
        
    </div>
    <div class=" book book4">
        <a href="got.html"></a>
        <div class="shadow shadow4">
            <center>
            <a href="genre-pages/horror/user-horror.php">   Horror</a> 
                <hr />
                </center>
        </div>
        
    </div>
    <div class=" book book5">
        <div class="shadow shadow5">
            <center>
                <a href="genre-pages/fantasy/user-fantasy.php"> Fantasy </a>
                <hr />
                </center>
            </div>
    </div>
    <div class=" book book6">
        <div class="shadow shadow6">

            <center>
                <a href="genre-pages/action/user-action.php">  Action </a>
                <hr />
                </center>
        </div>
        
    </div>
   
        
    </div>

</div>
<div class="footer">
</div>
</div>
</body>
</html>