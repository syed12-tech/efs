<?php
include 'connect.php';

	$id=$_GET['id'];
	$ss=mysqli_query($con,"update sectormaster set status = 0 where sectormaster_id = '$id'");
	if($ss)
	{
		header('location:d3.php?delete=1');
	}
	else
	{
		echo mysqli_error($con);
	}


?>