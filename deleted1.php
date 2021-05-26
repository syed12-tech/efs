<?php
include 'connect.php';

	$id=$_GET['id'];
	$ss=mysqli_query($con,"update pollingpersonnel set status = 0 where id = '$id'");
	if($ss)
	{
		header('location:d1.php?delete=1');
	}
	else
	{
		echo mysqli_error($con);
	}


?>