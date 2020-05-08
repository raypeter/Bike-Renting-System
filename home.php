<?php
	session_start();
	//require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
	</style>
	<title>Welcome to the Bike Renting system</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="topnav">
  <a class="active" href="home.php">Home</a>
  <a href="index.php" name="logout">Logout</a>
  <!--<a href="#contact">Contact</a>
  <a href="#about">About</a>-->
</div>
	<h2 align="center">Bikes to choose from:</h2>
	<h3>Welcome <?php
		echo $_SESSION['username']
	?></h3>
	<!--on logout-->
	<?php
	if(isset($_POST['logout']))
	{
		session_destroy();
		header('location:index.php');
	}
	?>
	<div class="row">
		<div class="column">
			<a href="bmxbike.html"><img src="img/ml.jpg" class="img-responsive" alt="BMX Bike"></a>
			<div class="text-block" style="bottom: 20px; right: 20px;">
    			<a href="bmxbike.html"><h4>BMX Bike</h4></a>
    			<p>Stunt bike designed for the active daredevil performer with lightweight composites</p>
  			</div>
		</div>
	</div>
	<hr style="border: 3px solid brown;">
	<div class="row">
		<div class="column">
			<a href="terr.html"><img src="img/cn.jpg"  class="img-responsive" alt="Terrain Bike"></a>
			<div class="text-block"style="bottom: 10px; right: 20px;">
    			<a href="terr.html"><h4>Terrain Bike</h4></a>
    			<p>A fast paced road-gripping bike built to easily handle tight turns at high speeds and handle with great prowess</p>
  			</div>
		</div>
	</div>
	<hr style="border: 3px solid white;">
	<div class="row">
		<div class="column">
			<a href="mountain bike.html"><img src="img/jw.jpg"  class="img-responsive" alt="Mountain Bike"></a>
			<div class="text-block">
    			<a href="mountain bike.html"><h4>Mountain Bike</h4></a>
    			<p>A powerful endurance bike with a knack for the rough roads</p>
    			<hr style="border: 3px solid white;">
  			</div>
		</div>
	</div>
	<br><hr>
	<div class="row">
		<div class="column">
			<a href="comfort.html"><img src="img/rh.jpg" class="img-responsive" alt="Comfort Bike"></a>
			<div class="text-block">
    			<a href="comfort.html" style="color: yellow"><h4>Comfort Bike</h4></a>
    			<p>A luxury brand meant for maximum comfort on the ride</p>
    			<br><hr style="border: 3px solid white;">
  			</div>

		</div>
	</div>
	<br><hr>
		<div class="row">
		<div class="column">
			<a href="triathlon.html"><img src="img/rb.jpg" class="img-responsive" alt="Triathlon Bike"></a>
			<div class="text-block">
    			<a href="triathlon.html"><h4>Triathlon Bike</h4></a>
    			<p>Very handy when it comes to long-distance cycling</p>
  			</div>
		</div>
	</div>
	<hr style="border: 3px solid white;">
		<div class="row">
		<div class="column">
			<a href="road bike.html"><img src="img/pw.jpg" class="img-responsive" alt="Road Bike"></a>
			<div class="text-block">
    			<a href="road bike.html" style="color: yellow"><h4>Road Bike</h4></a>
    			<p>A great pick for the open road</p>
  			</div>
		</div>
	</div>
	<hr style="border: 3px solid white;">
	</div>
</div>
</div>

  	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>