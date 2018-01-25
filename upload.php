<?php
include_once 'dbconfig.php';

	$name=$_POST['f_name'];
	$sem=$_POST['sem'];
	$sub=$_POST['sub'];
	$doc_date=$_POST['doc_date'];

if(isset($_POST['btn-upload']))
{    
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		
		$sql="INSERT INTO tbl_uploads(file,type,size,f_name,sem,sub,doc_date) VALUES('$final_file','$file_type','$new_size','$name','$sem','$sub','$doc_date')";
		$result=mysqli_query($con,$sql);
		if($result)		
		{
			?>
			<script>
			alert('successfully uploaded');
			window.location.href='uploadfile.php?success';
			</script>
		<?php
		}
		else
		{
			echo "error in insert";
		}
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='uploadfile.php';
        </script>
		<?php
	}
}
?>