<?php
include 'connect.php';

	$id=$_GET['id'];
	$s=mysqli_query($con,"update psrandomization set status = 0 where id = '$id'");
	if($s)
	{
		header('location:d5.php?delete=1');
	}
	else
	{
		echo mysqli_error($con);
	}


?>