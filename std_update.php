<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>SFDS</title>
        
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="External\bootstrap-3.3.7\dist\css\bootstrap.min.css" type="text/css"> 
		
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="External\font-awesome-4.7.0\css\font-awesome.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
		<script src="jquery-3.2.1.min.js" type="text/javascript"></script>        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>


        <style type="text/css">
            #MyFormColumn,#MyDetails{height:auto;padding:15px;border:2px solid Gray;box-shadow:0px 0px 30px Gray;margin-top:20px;}
            #MyFormColumn span,#MyDetails span{color:Teal;font-weight:bold;}
          body {
              position: relative; 
          }
          .affix {
              top:0;
              width: 100%;
              z-index: 9999 !important;
          }
          .navbar {
              margin-bottom: 0px;
          }

          .affix ~ .container-fluid {
             position: relative;
             top: 50px;
             background-color:#ffffff;
             color:#fff;
             height:200px;
          }
        </style>
		
    </head>
	<?php 
	
	$con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"demo");
		
	$table="SELECT * FROM contact_detail";
	$execute=mysqli_query($con,$table);
	$count=mysqli_num_rows($execute);
	
						
						
		$eno=$_GET['id'];
		?>
    <body data-spy="scroll" data-target=".navbar" data-offset="180">
	
        <div class="container-fluid">
             <div class="col-lg-2 col-md-2">
                  <h1><img src="Images/LOGO.png" height="150px" width="150px"/></h1>
             </div>
             <div class="col-lg-10 col-md-10  hidden-xs ">
                  <h1><img src="Images/Subhash.jpg" height="150px" width="100%" style="box-shadow:0px 0px 30px Gray;border-radius:10px;"/></h1>
             </div>
    </div>
    <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="200">
          <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                                      
              </button>
              <a class="navbar-brand" href="#">Dr. Subhash Technical Campus</a>
            </div>
            <div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="Home.php">Home</a></li>
				  <li > <a href="uploadfile.php">Upload File</a></li>
				  <li><a href="std_view.php">View Student</a></li>
				  <li><a href="view.php">View Document</a></li>
				  
					<script>
					$(document).ready(function(){
						$('[data-toggle="popover"]').popover();   
					});
					</script>
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Members <span class="caret"></span></a>
                    <ul class="dropdown-menu">
					
					
					  <li><a href="std_reg.php">Student Registration</a></li>
					  <li><a href="staff_reg.php">Staff Registration</a></li>
					  
                    </ul>
                  </li>
				  <li><a href="view_contact.php"  data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="<?php echo $count; ?>">Notification</a></li>
				  <li><a href="index.php">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav> 
		    

        <div class="container">
		
		
             <div class="row">
                   <div class="col-lg-6 col-offset-6 centered" id="MyFormColumn">
                        <center><h2><i class="fa fa-briefcase"></i> Update Student </h2></center><hr />
					<?php
						
						$table="select * from std_detail where eno=$eno;";
						$result=mysqli_query($con,$table);
						while($row=mysqli_fetch_array($result))
						{
							$name=$row['name'];
							$eno=$row['eno'];
							$sem=$row['sem'];
							$cno=$row['cno'];
							$mail=$row['email'];		
							$gender=$row['gender'];
							$address=$row['address'];	
					?>

					<form action="update_student.php" method="POST">	
						
                        <div class="form-group">
                             <span>Name:</span><br />
                             <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                  <input type="text" name="std_name" value="<?php echo $name; ?>" placeholder="Enter Name Here.." maxlength="20" class="form-control" required />
                             </div>
                        </div>
                        <div class="form-group">
                             <span>Enrollment No.:</span><br />
                             <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                                  <input type="text" name="eno" value="<?php echo $eno; ?>" placeholder="Enter Enrollment No. Here.." maxlength="12" class="form-control" required readonly />
                             </div>
                        </div>
						
						<div class="form-group">
                             <span>Semester:</span><br />
                             <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-object-ungroup"></i></span>  
								 
                                  <select class="form-control" name="sem" >
                                       <?php if($sem=='1') 
											{
										   ?> 
											  <option value="1" selected>Sem 1</option>
											  <option value="2">Sem 2</option>
											  <option value="3">Sem 3</option>
											  <option value="3">Sem 3</option>
											  <option value="4">Sem 4</option>
											  <option value="5">Sem 5</option>
											  <option value="6">Sem 6</option>
									  <?php }
									  ?>
									  
									  <?php if($sem=='2') 
											{ 
										?> 
										  <option value="1">Sem 1</option>
										  <option value="2" selected >Sem 2</option>
										  <option value="3">Sem 3</option>
										  <option value="3">Sem 3</option>
										  <option value="4">Sem 4</option>
										  <option value="5">Sem 5</option>
										  <option value="6">Sem 6</option>
									  <?php } ?>
									  
									  <?php if($sem=='3') { ?> 
											<option value="1">Sem 1</option>
										  <option value="2"  >Sem 2</option>
										  <option value="3" selected >Sem 3</option>
										  <option value="4">Sem 4</option>
										  <option value="5">Sem 5</option>
										  <option value="6">Sem 6</option>
									  <?php } ?>
									  
									  <?php if($sem=='4') { ?> 
											<option value="1">Sem 1</option>
										  <option value="2"  >Sem 2</option>
										  <option value="3"  >Sem 3</option>
										  <option value="4" selected >Sem 4</option>
										  <option value="5">Sem 5</option>
										  <option value="6">Sem 6</option>
									  <?php } ?>
									  
									  <?php if($sem=='5') { ?> 
											<option value="1">Sem 1</option>
											<option value="2"  >Sem 2</option>
											<option value="3"  >Sem 3</option>
											<option value="4"  >Sem 4</option>
											<option value="5" selected>Sem 5</option>
											<option value="6">Sem 6</option>
									  <?php } ?>
									  
									  <?php if($sem=='6') { ?> 
											<option value="1">Sem 1</option>
											<option value="2"  >Sem 2</option>
											<option value="3"  >Sem 3</option>
											<option value="4"  >Sem 4</option>
											<option value="5">Sem 5</option>
											<option value="6" selected>Sem 6</option>
									  <?php } ?>
									  
                                  </select>
                             </div>
                        </div>
						
                        <div class="form-group">
                             <span>Contact No.:</span><br />
                             <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                  <input type="text" name="cno" value="<?php echo $cno; ?>" placeholder="Enter Contact No. Here.." maxlength="10" class="form-control" required />
                             </div>
                        </div>
                        <div class="form-group">
                             <span>Email Id:</span><br />
                             <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                  <input type="email" name="mail" value="<?php echo $mail; ?>" placeholder="Enter Email Id Here.." maxlength="50" class="form-control" required />
                             </div>
                        </div>
                        <div class="form-group">
                             <span>Gender:</span><br />
                             <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-male"></i> | <i class="fa fa-female"></i></span>
								  
                                  <select class="form-control" name="gender">
										<?php if($gender=="Male")
										{	?>
										<option value="Male" selected>Male</option>
										<option value="Female">Female</option>
										<?php } ?>
										
										<?php if($gender=="Female")
										{	?>
										<option value="Male" >Male</option>
										<option value="Female" selected>Female</option>
										<?php } ?>
                                  </select>
                             </div>
                        </div>
                        
                        <div class="form-group">
                             <span>Address:</span><br />
                             <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-object-group"></i></span>
								   <textarea rows="5" name="address"  placeholder="Enter Address Here.." class="form-control" maxlength="2000" required > <?php echo $address; ?> </textarea>                             </div>
                        </div>
						
						<?php
							}
						?>
                        <div class="form-group">  
                             <input type="submit" value="Update Student Detail" class="btn btn-primary" />
                        </div>
					</form>
              </div>                 
	</div>	
</div>	
</body>
</html>
