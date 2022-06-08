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

<!---------------------------------------------------------------------------------->

<?php
//Database: db1 -- Table: info_hotel -> Connection...
// Information:
session_start();
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "db1";

$con    = mysqli_connect($host, $user, $pass, $db);
if (!$con) { 
    die("Error");
}

//-----------------------------------------------------------------------------------

$first_name             = "";
$last_name              = "";
$adress                 = "";
$m_w                    = "";
$d                      = "";
$d2                     = "";
$room_type              = "";
$total                  = "";
$sukses                 = "";
$error                  = "";


if (isset($_GET['click'])) {
    $click = $_GET['click'];
} else {
    $click = "";
}

//DELETE
if($click == 'delete'){
    $id         = $_GET['id'];
    $sql1       = "delete from info_hotel where id = '$id'";
    $q1         = mysqli_query($con,$sql1);
    if($q1){
        $sukses = "Delete is successful";
    }else{
        $error  = "Delete is NOT successful";
    }
}

//-----------------------------------------------------------------------------------

//EDIT
if ($click == 'edit') {
    $id             = $_GET['id'];
    $sql1           = "select * from info_hotel where id = '$id'";
    $q1             = mysqli_query($con, $sql1);
    $r1             = mysqli_fetch_array($q1);
    $first_name     = $r1['first_name'];
    $last_name      = $r1['last_name'];
    $adress         = $r1['adress'];
    $m_w            = $r1['m_w'];
    $d              = $r1['d'];
    $d2             = $r1['d2'];
    $room_type      = $r1['room_type'];
    $total          =  $r1['total'];

    if ($first_name == '') {
        $error = "Data not found ";
    }
}


//-----------------------------------------------------------------------------------

if (isset($_POST['s_b_save'])) { // create
    $first_name    = $_POST['first_name'];
    $last_name     = $_POST['last_name'];
    $adress        = $_POST['adress'];
    $m_w           = $_POST['m_w'];
    $d             = $_POST['d'];
    $d2            = $_POST['d2'];
    $total         = $_POST['total'];
    $room_type     = $_POST['room_type'];

//-----------------------------------------------------------------------------------

    if ($first_name && $last_name && $adress && $m_w && $d && $d2 && $room_type && $total) {
        if ($click == 'edit') { // update
            $sql1       = "update info_hotel set first_name = '$first_name',last_name='$last_name',adress = '$adress',m_w='$m_w',d='$d',d2='$d2', room_type='$room_type',total='$total' where id = '$id'";
            $q1         = mysqli_query($con, $sql1);
            if ($q1) {
                $sukses = "Data is Update";
            } else {
                $error  = "Data is NOT Update";
            }
        } else { // insert
            $sql1   = "insert into info_hotel(first_name,last_name,adress,m_w,d,d2,room_type,total) values ('$first_name','$last_name','$adress','$m_w','$d','$d2','$room_type','$total')";
            $q1     = mysqli_query($con, $sql1);
            if ($q1) {
                $sukses     = "Successfully ADD new data ";
            } else {
                $error      = "Failed to ADD data ";
            }
        }
    } else {
        $error = "ADD all data ";
    }
}
?>
<!---------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style-home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
 
</head>


 <!---------------------------------------------------------------------------------->

    <!--Buttons-->
  <div class="card text-end" style="width: 12rem; margin-left: 3px; margin-top: 10px;">
 
    <a href="logout.php" class="btn btn-primary">Logout <?php echo $_SESSION['name']; ?></a>
    <br>
    <a href="rooms.php"  class="btn btn-primary">Type of Rooms </a>
    <br>
    <a href="search.php"  class="btn btn-primary">Check-out</a>
    <br>
    <a href="Reference_room.php?room_type=empty"  class="btn btn-primary">Reference by Rooms </a>

  

  </div>

   <!---------------------------------------------------------------------------------->
  <img src="images/1.png"  style="width:20%;">
  <p >
	 <?php
	
        
        // Set the new timezone
        echo "Local Time: " ;
        date_default_timezone_set('Europe/Sofia');
        $date = date('d-m-y h:i:s');
        echo $date;
        ?>
        </p>
 <!---------------------------------------------------------------------------------->
    <div class="mx-auto" >

        <!-- Insert data -->
        <div   class="card border-dark mb-5 "   class="card">
        
            <div class="card-header">
            Box for creating editing information:
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                    //20
                    header("refresh:20;url=index2.php");
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                    //5
                    header("refresh:5;url=index2.php");
                }
                ?>
                <!---------------------------------------------------------------------------------->

                <!--First name-->
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="first_name" class="col-sm-2 col-form-label">Fname</label>
                        <div class="col-sm-10">
                            <input placeholder="first name" type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $first_name ?>">
                        </div>
                    </div>

                <!---------------------------------------------------------------------------------->

                <!--Last name-->
                    <div class="mb-3 row">
                        <label for="last_name" class="col-sm-2 col-form-label">LName</label>
                        <div class="col-sm-10">
                            <input placeholder="last name" type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $last_name ?>">
                        </div>
                    </div>

                <!---------------------------------------------------------------------------------->

                <!--Adress-->
                    <div class="mb-3 row">
                        <label for="adress" class="col-sm-2 col-form-label">Adress</label>
                        <div class="col-sm-10">
                            <input placeholder="№, street, town, country" type="text" class="form-control" id="adress" name="adress" value="<?php echo $adress ?>">
                        </div>
                    </div>

                <!---------------------------------------------------------------------------------->

                <!--Men/Women-->
                    <div class="mb-3 row">
                        <label for="m_w" class="col-sm-2 col-form-label">Men/Women</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="m_w" id="m_w">
                                <option value="">- Choose -</option>
                                <option value="men" <?php if ($m_w == "men") echo "selected" ?>>Men</option>
                                <option value="women" <?php if ($m_w == "women") echo "selected" ?>>Women</option>
                            </select>
                        </div>
                    </div>

                <!---------------------------------------------------------------------------------->

                <!--Check-in date (d)-->
                    <div class="mb-3 row">
                        <label for="d"  class="col-sm-2 col-form-label">Check-in date</label>
                        
                        <div class="col-sm-10">
                            <input placeholder="yyyy-mm-dd" type="text" class="form-control" id="d" name="d" value="<?php echo $d ?>">
                        </div>
                    </div>

                <!---------------------------------------------------------------------------------->

                <!--Check-out date (d2)-->
                    <div class="mb-3 row">
                        <label for="d2"  class="col-sm-2 col-form-label">Check-out date</label>
                        
                        <div class="col-sm-10">
                            <input placeholder="yyyy-mm-dd" type="text" class="form-control" id="d2" name="d2" value="<?php echo $d2 ?>">
                        </div>
                    </div>

                <!---------------------------------------------------------------------------------->

                <!--Room Type-->
                    <div class="mb-3 row">
                        <label for="room_type" class="col-sm-2 col-form-label">Room Type</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="room_type"  id="room_type">
                                <option value="">- Choose -</option>
                                <?php while($row1 = mysqli_fetch_array($result1)):;?>
                                <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
                                <?php endwhile;?>

                            </select>  
                        </div>
                    </div>

                <!----------------------------------------------------------------------------------> 
                
                <!--Total Sum-->
                    <div class="mb-3 row">
                        <label for="total" class="col-sm-2 col-form-label">Total Sum</label>
                        <div class="col-sm-10">
                            <input placeholder="$" type="text" class="form-control" id="total" name="total" value="<?php echo $total ?>">
                        </div>
                    </div>

                <!---------------------------------------------------------------------------------->

                    <!--SAVE-->
                    <div class="col-12">
                        <input type="submit" name="s_b_save" value="SAVE" class="btn btn-primary" />
                    </div>

                </form>
            </div>
        </div>
<!---------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------->

        <!-- data retrieval -->
        <div class="card">
        
            <div >
            <!-- Image(infomation) -->
            
            <img src="images/4.png" class="card-img" width=150  height=200 alt="...">
             
            </div>
            <div class="card-body"  >
                <!-- Table -->
                <table class="table"  >
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">FName</th>
                            <th scope="col">LName</th>
                            <th scope="col">Adress</th>
                            <th scope="col">Men/Women</th>
                            <th scope="col">Check-in date</th>
                            <th scope="col">Check-out date</th>
                            <th scope="col">Room Type</th>
                            <th scope="col">Total Sum</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        //Data
                        $sql2   = "select * from info_hotel order by id desc";
                        $q2     = mysqli_query($con, $sql2);
                        $t   = 1;
                        while ($n = mysqli_fetch_array($q2)) {
                            $id             = $n['id'];
                            $first_name     = $n['first_name'];
                            $last_name      = $n['last_name'];
                            $adress         = $n['adress'];
                            $m_w            = $n['m_w'];
                            $d              = $n['d'];
                            $d2             = $n['d2'];
                            $room_type      = $n['room_type'];
                            $total          = $n['total'];


                        ?>
                            <tr>
                                <!-- Row numbering (#) -->
                                <th scope="row"><?php echo $t++ ?></th>

                                <td scope="row"><?php echo $first_name ?></td>
                                <td scope="row"><?php echo $last_name ?></td>
                                <td scope="row"><?php echo $adress ?></td>
                                <td scope="row"><?php echo $m_w ?></td>
                                <td scope="row"><?php echo $d ?></td>
                                <td scope="row"><?php echo $d2 ?></td>
                                <td scope="row"><?php echo $room_type ?></td>
                                <td scope="row">$<?php echo $total ?></td>
                                <td scope="row">
                                    <a href="index2.php?click=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-outline-dark">Edit</button></a>
                                    <a href="index2.php?click=delete&id=<?php echo $id?>" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-outline-danger">Delete</button></a>            
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                        
                    </tbody>
                    
                </table>
                
            </div>
            
        </div>
        <br>
        <div >
            <p>by Petar Trashliev</p>
            </div>
    </div>
    
</body>

</html>