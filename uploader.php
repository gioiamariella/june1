<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
	include("functions/functions.php")
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>Stamped. | The Uploader</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />  
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
		<link rel ="stylesheet" type="text/css" href="/THESIS/styles/style.css" /></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
	</head>
	<body oncontextmenu="return false;">
		<form method="post" enctype="multipart/form-data">
			<input type="file" name="file_img" />
			<input type="submit" name="btn_upload" value="Upload">
		</form>

		<?php
			if(isset($_POST['btn_upload']))
			{
				$filetmp = $_FILES["file_img"]["tmp_name"];
				$filename = $_FILES["file_img"]["name"];
				$filetype = $_FILES["file_img"]["type"];
				$filepath = "customer/customer_images/".$filename;

				move_uploaded_file($filetmp, $filepath);

				$sql = "INSERT INTO customer_upload (img_name,img_path,img_type) VALUES ('$filename','$filepath','$filetype')";
				$result = mysqli_query($con, $sql);
			}
		?>
	</body>
</html>