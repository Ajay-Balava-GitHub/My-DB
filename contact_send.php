<?php
	$con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"demo");
	
	$first=$_POST['first'];
	$middle=$_POST['middle'];
	$last=$_POST['last'];
	$cno=$_POST['cno'];
	$mail=$_POST['mail'];		
	$gender=$_POST['gender'];
	$sub=$_POST['sub'];	
	$msg=$_POST['msg'];
	
	$query="insert into contact_detail (first,middle,last,cno,email,gender,sub,msg) values('$first','$middle','$last',$cno,'$mail','$gender','$sub','$msg');";
	$execute=mysqli_query($con,$query);
	if($execute)
	{
		?>
		<script>
		alert('Data send Successfully . . .');
		window.location.href='contact.php';
		</script>
		<?php
		
	}
	else
	{
		?>
		<script>
		alert('Problem in data Sending');
		window.location.href='contact.php';
		</script>
		<?php
		
	}
?>