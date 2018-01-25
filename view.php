
<!DOCTYPE html PUBLIC "-//W3C//Dth XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/Dth/xhtml1-transitional.dth">

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
	<?php
	$con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"demo");
		
	$table="SELECT * FROM contact_detail";
	$execute=mysqli_query($con,$table);
	$count=mysqli_num_rows($execute);
	
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
                  <li><a href="Home.php">Home</a></li>
				  <li><a href="uploadfile.php">Upload File</a></li>
				  <li><a href="std_view.php">View Student</a></li>
				  <li class="active"><a href="view.php">View Document</a></li>
				  
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
         <center><h3>Student Document</h3></center>
		 <hr/>
		 <div align="right"><a href="demo.php" class="btn btn-info" role="button" >Download</a> <br /></div><br/>
	<table class="table table-hover" border="1" >
    <thead>
		<tr>
			<th>Sr no.</th>
			<th>File Name</th>
			<th>Semester</th>
			<th>Subject</th>
			<th>File Type</th>
			<th>File Size(KB)</th>
			<th>Upload Date</th>
			<th>View</th>
		</tr>
	</thead>
    <?php
	$con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"demo");
	$sql="SELECT * FROM tbl_uploads";
	$result_set=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result_set))
	{
		?>
		<tbody>
        <tr>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['f_name'] ?></td>
			<td><?php echo $row['sem'] ?></td>
			<td><?php echo $row['sub'] ?></td>
			<td><?php echo $row['type'] ?></td>
			<td><?php echo $row['size'] ?></td>
			<td><?php echo $row['doc_date'] ?></td>
			<td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></th>
        </tr>
		</tbody>
        <?php
	}
	?>
    </table>
	
	
    </div>
</body>
</html>
