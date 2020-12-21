 <?php
 	session_start();
 	include 'DataEncryptionDecryption.php';
	$USERNAME = $_GET["USERNAME"];
	$conn = mysqli_connect("localhost","root","","ipproject");
	$query = "SELECT * FROM $USERNAME ORDER BY DATE DESC, Time DESC";
	$output = '';
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	if(mysqli_num_rows($result) != 0)
	{

		while($row = mysqli_fetch_array($result))
		{
			$output .= '
				<tr>
					<td>'.$row["Date"].'</td>
					<td>'.encrypt_decrypt('decrypt',$row["Time"]).'</td>
					<td>'.encrypt_decrypt('decrypt',$row["CurrentLevel"]).'</td>
					<td>'.encrypt_decrypt('decrypt',$row["totalLevel"]).'</td>
				</tr>
			';

		}
		
		echo $output;
	}
	else if(mysqli_num_rows($result) == 0)
	{
		echo "Data not Found";
	}
	else
	{
		echo "Fail";
	}
?> 






