<?php
	$con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"demo");
	
	$name=$_POST['std_name'];
	$eno=$_POST['eno'];
	$sem=$_POST['sem'];
	$cno=$_POST['cno'];
	$mail=$_POST['mail'];		
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	
	$query="update std_detail set name='$name',eno=$eno,sem='$sem',cno=$cno,email='$mail',gender='$gender',address='$address' where eno=$eno;";
	$execute=mysqli_query($con,$query);
	if($execute)
	{
		header('location:std_view.php');
		
	}
	else
	{
		echo "error";
	}
?>