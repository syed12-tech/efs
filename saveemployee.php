<?php
include 'connect.php';
if(isset($_POST['submit']))
{
	$ename=mysqli_escape_string($con,$_POST['ename']);
	$designation=mysqli_escape_string($con,$_POST['designation']);
	$role=mysqli_escape_string($con,$_POST['role']);
	$phone=mysqli_escape_string($con,$_POST['phone']);

	$s=mysqli_query($con,"select * from employee where phone='$phone'");
	$n=mysqli_num_rows($s);
	if($n>0)
	{
		header('location:index.php?phoneexist=1');
	}
	else
	{



	$sql=mysqli_query($con,"insert into employee values(null,'$ename','$designation','$role','$phone','1')");
	if($sql)
	{
		header('location:index.php?save=1');
	}
	else
	{
		echo mysqli_error($con);
	}
    }
}
else
{
	echo mysqli_error($con);
}

?>