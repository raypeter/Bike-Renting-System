
<?php
require 'dbconfig/config.php';

if (isset($_POST['username'])) {
	///Added
	$errors = null;
	$fullname = $_POST['fullname'];
	$residence = $_POST['residence'];
	$phoneno = $_POST['phoneno'];
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];
	
	if ($pass==$cpass) {
		$query = "select * from userinfotable WHERE username = '$username'";
		$query_run = mysqli_query($con,$query);

		if(mysqli_num_rows($query_run)>0) {
			// Added
			$errors = "User already exists";
			//there already exixts such a username
			//echo '<script type="text/javascript"> alert("User already exists...try another username") </script>';

		} else {
			$query = "insert into userinfotable values('','$username','$fullname','$residence','$phoneno','$pass')";
			$query_run = mysqli_query($con,$query);

			if($query_run) {
				// Redirect to login page
				header("Location: index.php");
				exit;
			} else {
				$errors = "Error occurred";
			}
		}
	} else {
		$errors = "Password and confirm password does not match";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<h1 align="center" style = "color: white">Welcome to the Registration Page</h1>
	<div class="signin">
		<form action="registration.php" method="post">
			<?php
			if (isset($errors)) {
				// errors were found
				echo "<h5 style = 'color:red'>" . $errors . "</h5>";
			}
			?>
			<h2 style="color:white">Register</h2>
			<input type="text" name="fullname" placeholder="Full Name" required>
			<input type="text" name="residence" placeholder="Place of Residence" required>
			<input type="text" name="phoneno" placeholder="Phone Number" required>
			<input type="text" name="username" placeholder="Username" required>
			<input type="password" name="pass" placeholder="Password" required>
			<input type="password" name="cpass" placeholder="Confirm Password" required/><br><br>
			<input type="submit" value="Register"/><br><br>
			<a href="index.php"><input type="button" name = "back" value="Back"/></a>
			<br><br><br><br>
		</form> 
	</div>
 
  	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>