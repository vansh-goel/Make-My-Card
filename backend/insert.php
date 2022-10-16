<?php 
	
	include_once 'config.php';
	if(isset($_POST['submit']))
	{
		$uname=$_POST['uname'];
		$post=$_POST['post'];
		$mno=$_POST['mno'];
		$pfp=$_POST['pfp'];
		$sql = "INSERT INTO userdetails (uname, post, mno,pfp)VALUES ('$uname', '$post', '$mno','$pfp')";

		if (mysqli_query($conn, $sql)) {
		 	header("Location: dhruvi.php");
		} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

mysqli_close($conn);

	}

 ?>