<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Log In</title>
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="External\font-awesome-4.7.0\css\font-awesome.min.css">
    
	<link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
				
				<form action="1.php" method="POST">
					<div class="group">
							<div class="form-group">
									 <div class="input-group">
											<center><span><i class="fa fa-group fa-4x" ></i></span></center>
									 </div>
							</div>
							
							
						<label for="user" class="label">Username</label>
						<input id="user" type="text" class="input" name="u_name" autofocus required>
					</div>
					<div class="group">
						<button class="button">
							 <i class="fa fa-arrow-circle-right fa-1x">Next </i>
						</button>
						
					</div>
					<div class="hr"></div>
					<div class="foot-lnk">
					<a href="#forgot">Forgot User Name?</a>
				</div>
					
				</form>
				
				
			</div>
			
		</div>
	</div>
</div>
  
  
</body>
</html>
