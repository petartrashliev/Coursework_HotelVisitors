<!DOCTYPE html>
<html>

<head>

<!--Login page-->
<!------------------------LOGO------------------------------------>
<img src="images/1.png" width="350" height="150" /><br>

<!---------------------------------------------------------------->
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style-login.css">

</head>


<!------------------------BODY------------------------------------>
<body>

		<form action="login.php" method="post">
			
				<h2>LOGIN</h2>
					<?php if (isset($_GET['error'])) { ?>
						<p class="error"><?php echo $_GET['error']; ?></p>
					<?php } ?>

			<label>User Name</label>
			<input type="text" name="uname" placeholder="user name"><br>
			<label>Password</label>
			<input type="password" name="password" placeholder="password"><br>
			<button type="submit">Login</button>
	
		</form>
<!---------------------------------------------------------------->
	 <h4>
	 <?php

		//Set the timezone
		echo "Local Time: " ;
		date_default_timezone_set('Europe/Sofia');
		$date = date('d-m-y h:i:s');
		echo $date;

		?>
	</h4>

</body>
</html>