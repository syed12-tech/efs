<?php
include 'connect.php';

	$id=$_GET['id'];
	$ss=mysqli_query($con,"update employee set status = 0 where id = '$id'");
	if($ss)
	{
		header('location:index.php?delete=1');
	}
	else
	{
		echo mysqli_error($con);
	}


?>