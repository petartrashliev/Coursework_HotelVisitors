<?php

//Database: db3 -- Table: rooms -> Connection...
// Information:
$hostname       = "localhost";
$username       = "root";
$password       = "";
$databaseName   = "db3";
// connect to mysql database
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
// mysql select query
$query = "SELECT * FROM `rooms`";
//  method
$result1 = mysqli_query($connect, $query);
?>


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="style-search.css">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta charset="UTF-8">
  <title>Reference</title>
</head>

<body>

<!---------------------------------------------------------------->
<div class="card text-end" style="width: 5rem;" >
      <!--Button (Back) -->
 			<a href="index2.php"><button type="button" class="button button3">Back</button></a>
  		</div>

    <!--Logo-->
    <img src="images/1.png"  style="width:20%;">
	  <!--Text(headings(h1))-->
	  <h2>Reference: Choose Room</h2>
    


<div class="container">
   <div class="row">
   <div class="col-md-8 col-md-offset-2" style="margin-top: 2%;">
   <div class="row">

   <?php 
    //------------------------------------------------------------------
     $conn = new mysqli('localhost', 'root', '', 'db1');
     if(isset($_GET['room_type'])){
        $searchKey = $_GET['room_type'];
        $sql = "SELECT * FROM info_hotel WHERE room_type LIKE '%$searchKey%'";
     }else
     $sql = "SELECT * FROM info_hotel";
     $result = $conn->query($sql);

     //------------------------------------------------------------------
   ?>

    <!--Choose box -->
   <form action="" method="GET"> 
     <div class="col-md-6">
     <select class="form-control" name="room_type"  id="room_type">
                                <option value="">- Room Type  -</option>
                                <?php while($row1 = mysqli_fetch_array($result1)):;?>
                                <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
                                <?php endwhile;?>

                            </select>
        
     </div>
    <!--Button (Find) -->
     <div class="col-md-6 text-left">
      <button class="btn">Find</button>
     </div>
     
     <br>
     
   </form>

   <br> 
   <br>
</div>
<!---------------------------------------------------------------->

<!--Table -->

        <table class="table table-bordered">
         
        <tr>
          
            <th>First Name</th>
            <th>Last Name</th>
            <th>Room Type</th>
        </tr>
        <?php while( $row = $result->fetch_object() ): ?>
        <tr>
          
            <td><?php echo $row->first_name ?></td>
            <td><?php echo $row->last_name ?></td>
            <td><?php echo $row->room_type ?></td>

        </tr>
        <?php endwhile; ?>
        </table>
    </div>
    </div>
    </div>
</body>
</html>