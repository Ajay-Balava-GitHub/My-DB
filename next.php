<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>password</title>
  
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="External\font-awesome-4.7.0\css\font-awesome.min.css">
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php if(isset($_COOKIE['user']))
{
?>
  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
				<form action="2.php" method="POST">
					
					<div class="group">
						<div class="form-group">
								 <div class="input-group">
										<center><span><i class="fa fa-id-card fa-4x" ></i></span></center>
								 </div>
								</div>
							<label for="pass" class="label">Password</label>
							<input id="pass" type="password" class="input" data-type="password" name="pass" autofocus required>
						</div>
					
					<div class="group">
						<button class="button">
							 <i class="fa fa-arrow-circle-right fa-1x">SIGN In </i>
						</button>
						
					</div>
					
					<div class="hr"></div>
				</form>
			</div>
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
} 
else
{
	
	header("location:index.php");
	echo "Enter User Name First";
	
}
?>  
</body>
</html>
