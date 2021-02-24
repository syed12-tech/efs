<?php
include 'connect.php';
if(isset($_POST['submit']))
{	$slno=$_POST['slno'];
	$ename=mysqli_escape_string($con,$_POST['ename']);
	$designation=mysqli_escape_string($con,$_POST['designation']);
	$role=mysqli_escape_string($con,$_POST['role']);
	$phone=mysqli_escape_string($con,$_POST['phone']);

	$s=mysqli_query($con,"select * from employee where phone='$phone' && id<>'$slno' ");
	$n=mysqli_num_rows($s);
	if($n>0)
	{
		header('location:index.php?phoneexist=1');
	}
	else
	{



	$sql=mysqli_query($con,"update employee set employeename='$ename',designation='$designation',role='$role',phone='$phone' where id ='$slno'");
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