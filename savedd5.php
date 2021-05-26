<?php
include 'connect.php';
if(isset($_POST['submit']))
{
	$smid=mysqli_escape_string($con,$_POST['sid']);
	$gmid=mysqli_escape_string($con,$_POST['gid']);
	

	



	$sql=mysqli_query($con,"insert into psrandomization values(null,'$smid','$gmid','1')");
	if($sql)
	{
		header('location:d5.php?save=1');
	}
	else
	{
		echo mysqli_error($con);
	}
}
?>