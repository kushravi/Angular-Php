<?php
	$server = "localhost";
	$user = "root";
	$pswrd = "";
	$dbname = "mydb";

	$conn = mysqli_connect($server,$user,$pswrd,$dbname);
	if(!$conn){
		die("connection Failed".mysqli_error());
	}
?>