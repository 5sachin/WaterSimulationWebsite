<?php
	include('DataEncryptionDecryption.php');
	$USERNAME = $_POST["USERNAME"];
	$conn = mysqli_connect("localhost","root","","ipproject");
	$output = '';
	$sql = "SELECT * FROM $USERNAME WHERE DATE LIKE '%".$_POST['search']."%'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) != 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			$Time = encrypt_decrypt('decrypt',$row["Time"]);
			$CurrentLevel = encrypt_decrypt('decrypt',$row["CurrentLevel"]);
			$totalLevel = encrypt_decrypt('decrypt',$row["totalLevel"]);
			$output .= '
				<tr>
					<td>'.$row["Date"].'</td>
					<td>'.$Time.'</td>
					<td>'.$CurrentLevel.'</td>
					<td>'.$totalLevel.'</td>
				</tr>
			';
		}
		echo $output;
	}
	else
	{
		echo "Data not Found";
	}

?>