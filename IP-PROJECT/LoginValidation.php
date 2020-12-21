<?php
	session_start();
	if(isset($_POST['do_login']))
	{
	 $host="localhost";
	 $username="root";
	 $password="";
	 $databasename="ipproject";
	 $connect=mysqli_connect($host,$username,$password,$databasename);
	 

	 $email=$_POST['email'];
	 $pass=$_POST['password'];
	 
	 $sql = "select * from loginform where User ='$email' and Password='$pass'";

	 $select_data=mysqli_query($connect,$sql);
	 if($row=mysqli_fetch_array($select_data))
	 {
	  $_SESSION['email']=$row['User'];
	  $_SESSION['Username']=$row['Name'];
	  echo "success";
	 }
	 else
	 {
	  echo "Wrong Details";
	 }
	 exit();
	}
?>