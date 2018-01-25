<?php
	$con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"demo");
	
	$eno=$_GET['id'];	
	
	$query1="delete from std_detail where eno=$eno;";
	$execute1=mysqli_query($con,$query1);
	if($execute1)
	{
		
		
				header('location:std_view.php');
		
	}
	else
	{
		echo "error";
	}
?>