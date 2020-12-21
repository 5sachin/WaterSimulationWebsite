<?php
	session_start();
	include('DataEncryptionDecryption.php');

	$host="localhost";
	$username="root";
	$password="";
	$databasename="ipproject";
	$connect=mysqli_connect($host,$username,$password,$databasename);
	 
	$TimeID = encrypt_decrypt('encrypt',$_POST['TimeID']);
	$CurrentDate = $_POST['CurrentDate'];
	$currentlevel = encrypt_decrypt('encrypt',$_POST['currentlevel']);
	$totalheightlevel = encrypt_decrypt('encrypt',$_POST['totalheightlevel']);
	$CurrentTime = encrypt_decrypt('encrypt',$_POST['CurrentTime']);
	$databasename = $_POST['databaseName'];

	$sql = "INSERT INTO $databasename (TimeID,Date,CurrentLevel,totalLevel,Time) VALUES('$TimeID','$CurrentDate','$currentlevel','$totalheightlevel','$CurrentTime')";
	 
	if(mysqli_query($connect,$sql))
	{  
		echo "success";
	}
	else
	{
		echo "Fail";
	}
?>