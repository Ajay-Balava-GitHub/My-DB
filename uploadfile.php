<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>SFDS</title>
        <link rel="icon" href="Images/icon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="External\bootstrap-3.3.7\dist\css\bootstrap.min.css" type="text/css"> 
		
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="External\font-awesome-4.7.0\css\font-awesome.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
		<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
		
		<!-- Select Semester Subject-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="select_jquery.js"></script>

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
		  .12
		  {
			  float:left;
		  }
        </style>
    </head>
	<?php
	$con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"demo");
		
	$table="SELECT * FROM contact_detail";
	$execute=mysqli_query($con,$table);
	$count=mysqli_num_rows($execute);
	
?>
    <body data-spy="scroll" data-target=".navbar" data-offset="200">
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
				  <li class="active"> <a href="uploadfile.php">Upload File</a></li>
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
                        <center><h2><i class="fa fa-briefcase"></i> Upload file </h2></center><hr />
							
						<form action="upload.php" method="post" enctype="multipart/form-data">
						  <div class="form-group">
						     <span>Upload File:</span><br />
                             <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-file-o"></i></span>
							
									<input type="file" name="file" class="form-control />			
									<?php
										if(isset($_GET['success']))
										{
											?>
											<label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
											<?php
										}
										else if(isset($_GET['fail']))
										{
											?>
											<label>Problem While File Uploading !</label>
											<?php
										}
										else
										{
											?>
											<label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
											<?php
										}
										?>
							</div>
                                <!--  <input type="file" placeholder="Upload file Here . ." class="form-control"/> -->
                             </div>
                       
                        
                        <div class="form-group">
                             <span>Name:</span><br />
                             <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                  <input type="text" name="f_name" placeholder="Enter Name Here.." maxlength="20" class="form-control" required autofocus />
                             </div>
                        </div>
						
						<div class="form-group">
                             <span>Semester:</span><br />
                             <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-object-ungroup"></i></span>  
                                 								  
								  <select class="form-control"  id="semester" name="sem" required> 
									<option>--Select--</option>
									<option>Sem_1</option>
									<option>Sem_2</option>
									<option>Sem_3</option>
									<option>Sem_4</option>
									<option>Sem_5</option>
									<option>Sem_6</option>
								</select>
                             </div>
                        </div>
						
						
						<div class="form-group">
                             <span>Subject:</span><br />
                             <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-book"></i></span>  
								  
									<select class="form-control" id="subject" name="sub" required>
										<!-- Dependent Select option field -->
									</select>
                             </div>
                        </div>
                       
                        <div class="form-group">
                             <span>Date:</span><br />
                             <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                  <input type="date" class="form-control" name="doc_date" required />
                             </div>
                        </div>
						
                        <div class="form-group">  
                             <input type="submit" value="Upload File" name="btn-upload" class="btn btn-primary" />
                        </div>
					</form>
                   </div>                 
		</div>
		 
    </div>
</body>
</html>
