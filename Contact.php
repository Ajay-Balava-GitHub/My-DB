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
    <body data-spy="scroll" data-target=".navbar" data-offset="180">
        <div class="container-fluid">
             <div class="col-lg-2 col-md-2">
                  <h1><img src="Images/LOGO.png" height="150px" width="150px"/></h1>
             </div>
             <div class="col-lg-10 col-md-10  hidden-xs ">
                  <h1><img src="Images/Subhash.jpg" height="150px" width="100%" style="box-shadow:0px 0px 30px Gray;border-radius:10px;"/></h1>
             </div>
    </div>
        <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
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
                  <li><a href="www.sfds.com.php">Home</a></li>
                  <li><a href="About.php">About Us</a></li>
                  <li class="active"><a href="#section3">Contact Us</a></li>
                  <li><a href="index.php">Staff Login</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>    

        <div class="container">
             <div class="row">
                   <div class="col-lg-6 col-md-6" id="MyFormColumn">
                        <center><h2><i class="fa fa-briefcase"></i> Contact Message</h2></center><hr />
						<form action="contact_send.php" method="POST">
                        <div class="form-group">
                             <span>First Name:</span><br />
                             <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                  <input type="text" name="first" placeholder="Enter First Name Here.." maxlength="20" class="form-control" required autofocus/>
                             </div>
                        </div>
                        <div class="form-group">
                             <span>Middle Name:</span><br />
                             <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                  <input type="text" name="middle" placeholder="Enter Middle Name Here.." maxlength="20" class="form-control" required/>
                             </div>
                        </div>
                        <div class="form-group">
                             <span>Last Name:</span><br />
                             <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                  <input type="text" name="last" placeholder="Enter Last Name Here.." maxlength="20" class="form-control" required />
                             </div>
                        </div>
                        <div class="form-group">
                             <span>Contact No.:</span><br />
                             <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                  <input type="text" name="cno" placeholder="Enter Contact No. Here.." maxlength="10" class="form-control" required />
                             </div>
                        </div>
                        <div class="form-group">
                             <span>Email Id:</span><br />
                             <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                  <input type="text" name="mail" placeholder="Enter Email Id Here.." maxlength="50" class="form-control" required/>
                             </div>
                        </div>
                        <div class="form-group">
                             <span>Gender:</span><br />
                             <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-male"></i> | <i class="fa fa-female"></i></span>
                                  <select class="form-control" name="gender">
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                  </select>
                             </div>
                        </div>
                        <div class="form-group">
                             <span>Subject:</span><br />
                             <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-object-group"></i></span>
                                  <input type="text" name="sub" placeholder="Enter Subject Here.." maxlength="200" class="form-control" required/>
                             </div>
                        </div>
                        <div class="form-group">
                             <span>Message:</span><br />
                             <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-object-group"></i></span>
                                  <textarea rows="5" name="msg" placeholder="Enter Message Here.." class="form-control" maxlength="2000" required></textarea>
                             </div>
                        </div>
                        <div class="form-group">  
                             <input type="submit" value="Send" class="btn btn-primary" />
                        </div>
						</form>
                   </div>
				   
				   
                   <div class="col-lg-offset-1 col-md-offset-1 col-lg-5 col-md-5" id="MyDetails" style="padding:40px;">
                        <div class="row">
                             <div class="form-group">
                                 <span>Contact No.:</span><br />
                                 <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                      + 91 - 9067049083
                                 </div>
                            </div>
                            <hr />
                            <div class="form-group">
                                 <span>Email Id:</span><br />
                                 <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                      info@drsubhashtech.edu.in
                                 </div>
                            </div>
                            <div class="form-group">
                                 <span>Address:</span><br />
                                 <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                      <address>
											Dr. Subhash Technical Campus,<br />
                                            Dr. Subhash Road,<br />
                                            Junagadh (Gujarat)-362001,<br />
                                            </address>
                                 </div>
                            </div>
                        </div> 
                        <div class="row">
                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3711.0426957167124!2d70.45407771494142!3d21.545185785720836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39580215f891e231%3A0x8b7b07ea65bd626b!2sDr.+Subhash+Technical+Campus!5e0!3m2!1sen!2sin!4v1515504345554" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>                   
                   </div>
             </div>
        </div>
</body>
</html>
