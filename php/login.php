<?php 
//login.php - > Here is check username and password from "users" -db2:

session_start(); 
include "db_conn_login.php";
//-----------------------------------------------------------
if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
//-----------------------------------------------------------
	//Is it empty?	
	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{

		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);
		
		//check correct information:
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];

				//Everything is OK:
            	header("Location: index2.php");
		        exit();

            }else{
				//Incorect information:
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			//Incorect information:
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}
//-----------------------------------------------------------