<?php
include 'connect.php';
if(isset($_POST['submit']))
{
	$gid=mysqli_escape_string($con,$_POST['gid']);
	$fid=mysqli_escape_string($con,$_POST['fid']);
	$sid=mysqli_escape_string($con,$_POST['sid']);
	$tid=mysqli_escape_string($con,$_POST['tid']);
	$pid=mysqli_escape_string($con,$_POST['pid']);
	

	



	$sql=mysqli_query($con,"insert into groupmaster values('$gid','$fid','$sid','$tid','$pid','1')");
	if($sql)
	{
		header('location:d4.php?save=1');
	}
	else
	{
		echo mysqli_error($con);
	}
}
?>