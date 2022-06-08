<?php
//Database: db2 -- Table: users -> Connection...

// Information:
$sname		= "localhost";
$unmae		= "root";
$password	= "";
$db_name 	= "db2";
//-----------------------------------------------------------
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
//-----------------------------------------------------------
//Check connection(conn):
if (!$conn) {
	echo "Connection failed!";
}


