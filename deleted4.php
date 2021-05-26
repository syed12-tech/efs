<?php
include 'connect.php';

	$id=$_GET['id'];
	$ss=mysqli_query($con,"update groupmaster set status = 0 where groupmaster_id = '$id'");
	if($ss)
	{
		header('location:d4.php?delete=1');
	}
	else
	{
		echo mysqli_error($con);
	}


?>