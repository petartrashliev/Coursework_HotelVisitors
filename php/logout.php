<?php 
//Logout and go to (index.php -> login page):
session_start();
session_unset();
session_destroy();
header("Location: index.php");