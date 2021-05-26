<?php
include 'connect.php';
if(isset($_POST['submit']))
{
	$sname=mysqli_escape_string($con,$_POST['sname']);
	$pname=mysqli_escape_string($con,$_POST['pid']);
	$phone=mysqli_escape_string($con,$_POST['phone']);
	


	$sql=mysqli_query($con,"insert into pollingstation values(null,'$sname','$pname','$phone','1')");
	if($sql)
	{
		header('location:d2.php?save=1');
	}
	else
	{
		echo mysqli_error($con);
	}
}
?>