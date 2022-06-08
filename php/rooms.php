<?php
//Database: db3 -- Table: rooms -> Connection...
//-----------------------------------------------------------------
$user 		= 'root';
$password 	= '';
$database 	= 'db3';
$servername	='localhost';

$conn = mysqli_connect($servername, $user,$password, $database);

// Checking for connections:
if (!$conn) {
	echo "Connection failed!";
}

//-----------------------------------------------------------------
//SQL query to select data from database
$sql = "SELECT * FROM rooms  ";
$result = $conn->query($sql);
$conn->close();
?>
<!---------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="style-rooms.css">

		<head>
			
			<meta charset="UTF-8">
			<title>Type of Rooms</title>
			
		</head>

<body>
	<section>

		<!--Back button-->
        <div class="card text-end" style="width: 5rem;" >
 			<a href="index2.php"><button type="button" class="button button3">Back</button></a>
  		</div>

<!---------------------------------------------------------------->

	<!--Logo-->
    <img src="images/1.png"  style="width:20%;">
	<!--Text(headings(h1))-->
	<h1>All Type Of Rooms</h1>

<!---------------------------------------------------------------->

		<!-- Table Construction -->
		<table>
			<tr>
				<th>#</th>
				<th>Room Type</th>
				<th>More information</th>
				<th>Squaring(m2)</th>
                <th>Price(for night)</th>
			</tr>

			<!-- PHP code to fetch data from rows-->
			<?php 	//Loop till end of data
					while($rows=$result->fetch_assoc())
					{
				?>
				
				<tr>
					<!--Fetching data from each row of every column-->
					<td><?php echo $rows['number'];?></td>
					<td><?php echo $rows['room_type'];?></td>
					<td><?php echo $rows['room_info'];?></td>
					<td><?php echo $rows['squaring'];?></td>
					<td><?php echo $rows['price'];?></td>
				</tr>
			<?php
				}
			?>
		</table>
	</section>
	</body>
</html>
