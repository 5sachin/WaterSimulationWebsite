<?php
	session_start();

 	$host="localhost";
	$username="root";
	$password="";
	$databasename="ipproject";
	$connect=mysqli_connect($host,$username,$password,$databasename);
 

 	$varHeight= $_POST['curHeight'];
 	$USERNAME = $_POST['USERNAME'];
 	$sql = "UPDATE tanklevel SET VariableHeight = '$varHeight'  WHERE username = '$USERNAME'";

 	if ($connect->query($sql) === TRUE)
 	{
 		echo "Success";
 	}
 	else
 	{
 		echo "Fail";
 	}
?>