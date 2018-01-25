<?php
if($_POST['u_name'])
{
	session_start();
	$con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"demo");
	
	if($db)
	{
		$u_name=$_POST['u_name'];
		$user="select u_name from faculty_master where u_name='$u_name'";
		$query=mysqli_query($con,$user);
		if($query)
		{
			$n=mysqli_fetch_array($query);
			if($u_name==$n['u_name'])
			{
				$Expire=60*2+time();
				setcookie('user',$u_name,$Expire);
				header("location:next.php");
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
}
else
{
	echo "Enter Username";
}
?>