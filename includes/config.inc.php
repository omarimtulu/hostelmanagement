<?php
	if(!isset($_SESSION)){
		session_start();
	}
  
 $conn=mysqli_connect("localhost","root","","hostel_management_system");

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>
