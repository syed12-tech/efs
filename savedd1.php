<?php
include 'connect.php';
if(isset($_POST['submit']))
{
	$pname=mysqli_escape_string($con,$_POST['pname']);
	$pid=mysqli_escape_string($con,$_POST['pid']);
	$desig=mysqli_escape_string($con,$_POST['desig']);
	

	



	$sql=mysqli_query($con,"insert into pollingpersonnel values(null,'$pname','$pid','$desig','1')");
	if($sql)
	{
		header('location:d1.php?save=1');
	}
	else
	{
		echo mysqli_error($con);
	}
}
?>