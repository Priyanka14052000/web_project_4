<?php
// Start the session
session_start();

$user = $_SESSION['user'];




?>


<!DOCTYPE html>
<html>
<html lang="en">
<head>
  <title>Thanks For Your Payment</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="icons/icon5.png" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="homepage.css">
  <script src="login.js"> </script>
  <script src="jump.js"> </script>
</head>
<body>
  <nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
                </button>
				<a class="navbar-brand" href="homepage.html"><span class="glyphicon glyphicon-home"></span> Home</a>	
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="aboutus.php"><span class="glyphicon glyphicon-info-sign"></span> About us</a>	
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					
					<li id = "cart">
						<a class="navbar-brand" href="cartshow.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a>
					</li>
					<li class="dropdown" id = "new">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
							<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
							  <li><a href="Adminpage.html">Admin</a></li>
							  <li><a href="customersignin.html">Member</a></li>
							</ul>	
					</li id = "new">
					<li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					  <li class="dropdown" id = "old">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" ><span class="glyphicon glyphicon-user" id="wuser">Welcome </span>
						<span class="caret"></span>
						</a>
						<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
							<li><a href="showhistory.php">History</a></li>							
							<li><a href="logout.php" id="logout">Sign out</a></li>
						</ul>
						</li>
				</ul>
			</div>
		</div>
		<div class="jumbotron text-center" id="headerAirline">
		<h1>Grad Airlines</h1> 
		<p>It's time to fly!</p> 
	  </div>
	</nav>


<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">

    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Payment successfully done</h1>
      <div><img src="smile.png" alt="smile" id="smile">
      </div>




<?php

include_once 'dbconnect2.php';

 
    $sql = mysqli_query($con,"UPDATE book
            SET paid = '1'
            WHERE username = '$user'");



mysqli_close($con);
?>




    </div>
    
  </div>
</div>

</body>
</html>