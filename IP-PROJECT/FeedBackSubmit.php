<?php
	session_start();
	if(isset($_POST['Feedback']))
	{
		$host="localhost";
	 $username="root";
	 $password="";
	 $databasename="ipproject";
	 $connect=mysqli_connect($host,$username,$password,$databasename);
	 

	 $firstname=$_POST['firstname'];
	 $lastname=$_POST['lastname'];
	 $areacode=$_POST['areacode'];
	 $telnum=$_POST['telnum'];
	 $emailid=$_POST['emailid'];
	 $feedback=$_POST['feedback'];
	 $contactornot = $_POST['contactornot'];
	 $contactvia = $_POST['contactvia'];
	 
	 $sql = "INSERT INTO contact (FName,LName,AreaCode,TelNum,Email,ContactOrNot,ContactVia,Feedback) VALUES('$firstname','$lastname','$areacode','$telnum','$emailid','$contactornot','$contactvia','$feedback')";
	 
	if(mysqli_query($connect,$sql))
	{  
		echo "success";
	}
	else
	{
		echo "Fail";
	}
	}
	
?>