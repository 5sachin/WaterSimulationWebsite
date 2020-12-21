<?php
	session_start();
	$host="localhost";
	$username="root";
	$password="";
	$databasename="ipproject";
	$connect=mysqli_connect($host,$username,$password,$databasename);
	$message = "";

	if(!$connect)
	    $message = die('Could not Connect'.mysqli_connect_error());

	$USERNAME = $_POST['USERNAME'];
	 
	$sql = "select * from tanklevel where Username = '$USERNAME'";

	$select_data=mysqli_query($connect,$sql);
	if($row=mysqli_fetch_array($select_data))
	{
	 	$_SESSION["data"] = $row;
	  	echo json_encode($row);
	}
	else
	{
	 	echo "Fail";
	}
	exit();
?>