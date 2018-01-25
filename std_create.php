<?php
	$con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"demo");
	
	$user_id=$_POST['user_id'];
	$password=$_POST['password'];
	$name=$_POST['std_name'];
	$eno=$_POST['eno'];
	$sem=$_POST['sem'];
	$cno=$_POST['cno'];
	$mail=$_POST['mail'];		
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	
	$query="insert into student_master values('$user_id','$password',$eno);";
	$execute=mysqli_query($con,$query);
	if($execute)
	{
		
		$query="insert into std_detail values('$name',$eno,'$sem',$cno,'$mail','$gender','$address');";
		$execute=mysqli_query($con,$query);
		if($execute)
		{
			header('location: std_view.php');
		}
		else
		{
			echo "error in Student Registration in std_detail table";
		}
	}
	else
	{
		echo "error";
	}
?>