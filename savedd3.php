<?php
include 'connect.php';
if(isset($_POST['submit']))
{
	$pid=mysqli_escape_string($con,$_POST['sectormaster']);
	$zid=mysqli_escape_string($con,$_POST['pid']);
	$sid=mysqli_escape_string($con,$_POST['zid']);
	$aid=mysqli_escape_string($con,$_POST['sid']);
	$amd=mysqli_escape_string($con,$_POST['aid']);
	

	



	$sql=mysqli_query($con,"insert into sectormaster values('$pid','$zid','$sid','$aid','$amd','1')");
	if($sql)
	{
		header('location:d3.php?save=1');
	}
	else
	{
		echo mysqli_error($con);
	}
}
?>