<?php  
     	$servername = "127.0.0.1";
	$username = "root";  
       	$password = "";  
	$database="travel";
       	$con = mysqli_connect($servername , $username , $password) or die("unable to connect to host");  
	
	$sql = mysqli_select_db($con,$database) or die("unable to connect to database");	
?>