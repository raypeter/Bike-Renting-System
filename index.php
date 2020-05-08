<?php
	session_start();
	require 'dbconfig/config.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Bike Renting System</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<h1 style="color: white" align="center">Welcome to the Bike Renting System. Please proceed</h1>
	<div class="signin">
		<form action="index.php" method="post">
			<h2 style="color:white">Log In</h2>
			<input type="text" name="username" placeholder="Username" required>
			<input type="password" name="pass" placeholder="Password" required><br><br>
			<a href="index.php" ><input name="login" type="submit" value="Log In"></a><br><br>
			<br><br><br><br>
	<p style="color: white">Don't have an account?<a href="registration.php" style="color: yellow">&nbsp;Sign up</a></p>
	</form>
		<?php
			if(isset($_POST['login']))
			{

				$username = $_POST['username'];
				$pass = $_POST['pass'];
				
				$query = "select * from userinfotable WHERE username = '$username' AND password='$pass'";
				$query_run = mysqli_query($con,$query);

				if(mysqli_num_rows($query_run)>0)
				{
					//valid
					$_SESSION['username'] = $username;
					header('location: home.php');
				}else
				{
					//invalid
					echo '<script type="text/javascript"> alert("Wrong credentials") </script>';
				}
			}
		?>
</div>

  	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
  </body>
  </html>
