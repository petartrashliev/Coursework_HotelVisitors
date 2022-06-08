<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="style-search.css">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta charset="UTF-8">
  <title>Search</title>
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
	  <h2>Check-out Search</h2>


<div class="container">
   <div class="row">
   <div class="col-md-8 col-md-offset-2" style="margin-top: 2%;">
   <div class="row">

   <?php 
    //------------------------------------------------------------------
     $conn = new mysqli('localhost', 'root', '', 'db1');
     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM info_hotel WHERE id LIKE '%$searchKey%'";
     }else
     $sql = "SELECT * FROM info_hotel";
     $result = $conn->query($sql);

     //------------------------------------------------------------------
   ?>

    <!--Search box -->
   <form action="" method="GET"> 
     <div class="col-md-6">
        <input type="text" name="search" class='form-control' placeholder="Search By Client ID" value=<?php echo @$_GET['search']; ?> > 
     </div>
    <!--Button (Search) -->
     <div class="col-md-6 text-left">
      <button class="btn">Search</button>
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
            <th>Check-out date</th>
            <th>Room Type</th>
        </tr>
        <?php while( $row = $result->fetch_object() ): ?>
        <tr>
            
            <td><?php echo $row->first_name ?></td>
            <td><?php echo $row->last_name ?></td>
            <td><?php echo $row->d2 ?></td>
            <td><?php echo $row->room_type ?></td>

        </tr>
        <?php endwhile; ?>
        </table>
    </div>
    </div>
    </div>
</body>
</html>