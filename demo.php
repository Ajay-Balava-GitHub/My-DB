<?php

// Error reporting:
error_reporting(E_ALL^E_NOTICE);

// Including the DB connection file:
require 'connect.php';

$extension='';
$files_array = array();


/* Opening the thumbnail directory and looping through all the thumbs: */

$dir_handle = @opendir($directory) or die("There is an error with your file directory!");

while ($file = readdir($dir_handle)) 
{
	/* Skipping the system files: */
	if($file{0}=='.') continue;
	
	/* end() returns the last element of the array generated by the explode() function: */
	$parts = explode('.',$file);
	$extension = strtolower(end($parts));
	
	/* Skipping the php files: */
	if($extension == 'php') continue;

	$files_array[]=$file;
}

/* Sorting the files alphabetically */
sort($files_array,SORT_STRING);

$file_downloads=array();

$result = mysqli_query($con,"SELECT * FROM download_manager");

if(mysqli_num_rows($result))
while($row=mysqli_fetch_assoc($result))
{
	/* 	The key of the $file_downloads array will be the name of the file,
		and will contain the number of downloads: */
		
	$file_downloads[$row['filename']]=$row['downloads'];
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>download</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="External\bootstrap-3.3.7\dist\css\bootstrap.min.css" type="text/css"> 
<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.2.6.css" media="screen" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>

</head>

<body>
   
<div id="file-manager">

    <ul class="manager">
    <?php 

        foreach($files_array as $key=>$val)
        {
            echo '<li><a href="download.php?file='.urlencode($val).'">'.$val.' 
                    <span class="download-count" title="Times Downloaded">'.(int)$file_downloads[$val].'</span> <span class="download-label">download</span></a>
                    </li>';
        }
    
    ?>
  </ul>

</div>

<center><a href="view.php" class="btn btn-info" role="button">Back</a></center>


<!-- BSA AdPacks code. Please ignore and remove. -->
<script type="text/javascript" src="http://cdn.tutorialzine.com/misc/adPacks/v1.js" async></script>

</body>
</html>
