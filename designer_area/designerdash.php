<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
	include("../functions/functions.php")
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
	<link rel ="stylesheet" type="text/css" href="styles/style.css" />
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	</head>
	<body>
		<h1 class="title">Designer Dashboard</h2>
		<p class="desc">The <b>Designer Dashboard</b>, or Designer Dash, is used by designers to accurately manage the designs that will soon be uploaded on the website.</p>
		<!--<header>
			<nav>
			    <ul>
			      <li class="current"><a href="#home">Home</a></li>
			      <li><a href="#about">Upload a Design</a></li>
			      <li id="logo"><a href="#status">Status</a></li>
			    </ul>
			</nav>
		</header>-->
		<div id="container">

			<form action="designerdash.php" method="post" enctype="multipart/form-data">
	 			Select image to upload:
				<input type="file" name="fileToUpload" id="fileToUpload">
				<input type="submit" value="Upload Image" name="submit">
			</form>
			<br>
			<b>Design Status and Remarks</b>
			<p>Here is where you will see the status of your design, as approved or disapproved by the administrator.</p>

			<center>
				<table border="0" cellspacing="10px">
				<tr>
					<th>Image Filename</th>
					<th>Image Type</th>
					<th>Image Description</th>
					<th>Remarks</th>
				</tr>
				</table>
			</center>

			<b>Client Design</b>
			<p>Here is where the designs of the clients who use The Customizer will appear. Designers should recreate these designs for printing. Uploaded photos such as logos will also be included here.</p>

			<?php
				$target_dir = "product_images/";
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				if(isset($_POST["submit"])) {
				    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				    if($check !== false) {
				        echo "File is an image - " . $check["mime"] . ".";
				        $uploadOk = 1;
				    } else {
				        echo "File is not an image.";
				        $uploadOk = 0;
				    }
				}
				// Check if file already exists
				if (file_exists($target_file)) {
				    echo "Sorry, file already exists.";
				    $uploadOk = 0;
				}
				// Check file size
				if ($_FILES["fileToUpload"]["size"] > 500000) {
				    echo "Sorry, your file is too large.";
				    $uploadOk = 0;
				}
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				    $uploadOk = 0;
				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				    echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
				} else {
				    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				    } else {
				        echo "Sorry, there was an error uploading your file.";
				    }
				}
			?>
		</div>
	</body>
</html>