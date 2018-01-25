<?php
	$con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"demo");
	
	$user_id=$_POST['user_id'];
	$password=$_POST['password'];
	$name=$_POST['f_name'];
	$cno=$_POST['cno'];
	$mail=$_POST['mail'];		
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	
	$query="insert into faculty_master (u_name,pass,email) values('$user_id','$password','$mail');";
	$execute=mysqli_query($con,$query);
	if($execute)
	{
		
		$query="insert into staff_detail (name,cno,email,gender,address) values('$name',$cno,'$mail','$gender','$address');";
		$execute=mysqli_query($con,$query);
		if($execute)
		{
			header('location: Home.php');
		}
		else
		{
			echo "error in staff Registration ";
			
		}
	}
	else
	{
		echo "error";
	}
?>