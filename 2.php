<?php
	$con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"demo");
	if($db)
	{
		$u_name=$_COOKIE['user'];
		$pass=$_POST['pass'];
		$user="select pass from faculty_master where  u_name='$u_name' and pass='$pass'";
		$query=mysqli_query($con,$user);
		if($query)
		{
			$n=mysqli_fetch_array($query);
			if($pass==$n['pass'])
			{
				header("location: Home.php");
			}
			else
			{
				header("location:index.php");
			}
		}
	}
	else
	{
		echo "Error";
	}

?>