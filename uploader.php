<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
	include("functions/functions.php")
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<?php include("includes/inc_headerscripts.php");?>
	</head>
	<body oncontextmenu="return false;">
			<div class="topnav" id="myTopnav">
  			<?php include("includes/inc_navi.php");?>
		</div>
	<div class="uploadercont">
			<h3>The Uploader</h3>
			<h5>Guidelines:</h5>
			<p>1. Files to be uploaded must be <b>.jpg</b>, <b>.pdf</b>, or a flattened </b>.psd</b> file. Files must be <b>300 dpi</b>, <b>CMYK</b> format.</p>
			<p>2. Please make sure that this is the <i>final file for printing</i>, meaning the designers will not do any more alterations regarding the design.</p>
			<p>3. Should the designers find that the files are corrupted, the client will be notified thru email regarding requests for re-uploads.</p>
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
						$filepath = "../customer/customer_images/".$filename;

						if(move_uploaded_file($filetmp, $filepath)){
							//Success message here
							echo "<h3>File uploaded Successfully!</h3>";
						}else{
							echo "Oops, Something went wrong..";
						}

						$sql = "INSERT INTO customer_upload (img_name,img_path,img_type) VALUES ('$filename','$filepath','$filetype')";
						$result = mysqli_query($con, $sql);
					}
				?>
				</div>
				    <div style="position:relative;">
		        <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
		          <p><?php include("includes/inc_bottomcontact.php");?></p>
		        </div>
		    </div>
    
<script>

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
	</body>
</html>