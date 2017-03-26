<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
	include("functions/functions.php")
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>Stamped. | Our Products</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />  
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
		<link rel ="stylesheet" type="text/css" href="/THESIS/styles/style.css" /></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
	</head>
	<body oncontextmenu="return false;" bgcolor="pink">

				<ul class="topnav" id="myTopnav">
  			<?php include("includes/inc_navi2.php");?>
		</ul><!--start of products-->

<div class="main_wrapper">
	<!--search bar is here-->
	<div class="menubar">
		<div id="form">
			<form method="get" action="results.php" enctype="multipart/form-data">
				<input type="text" name="user_query" placeholder="Search a category"/>
				<input type="submit" name="search" value="Search" />
			</form>
		</div>
	</div>
	<!--search bar ends here-->

	<!--content wrapper is here-->
	<div class="content_wrapper">
		
		<!--sidebar is here-->
		<div id="sidebar">
			<div id="sidebar_title">Categories</div>

			<ul id="cats">
					<?php getCats(); ?>
			</ul>

			<div id="sidebar_title">Paper Kinds</div>

			<ul id="cats">
					<?php getPaperKind(); ?>
			</ul>

			<div id="sidebar_title">Print Finish</div>

			<ul id="cats">
					<?php getPrintFinish(); ?>
			</ul>
		</div>
		<!--sidebar ends here-->

		<!--content area is here-->
		<div id="content_area">
			<div id="shopping_cart">
				<span style="float:right; font-size:18px; padding:5px; line-height:40px;">
					Welcome Guest! <b><a style="color:yellow;" href="login.php">Login</a></b> | <b><a style="color:yellow;" href="register.php">Register</a></b>

				</span>
			</div>
			<div id="products_box">
				<?php

				if(isset($_GET['pro_id'])) {
				$product_id = $_GET['pro_id'];
				$get_pro = "select * from products where product_id='$product_id'";
				$run_pro = mysqli_query($con,$get_pro);
				while($row_pro=mysqli_fetch_array($run_pro)){
					$pro_id = $row_pro['product_id'];
					$pro_cat = $row_pro['product_cat'];
					$pro_pk = $row_pro['product_paperkind'];
					$pro_pf = $row_pro['product_printfinish'];
					$pro_title = $row_pro['product_title'];
					$pro_price = $row_pro['product_price'];
					$pro_img = $row_pro['product_img'];
					$pro_desc = $row_pro['product_desc'];

					echo "
						<div id='single_product'>

							 <center><h3>$pro_title</h3>
							 <div class='effects'>
								<img  src='admin_area/product_images/$pro_img'  class='columns'  width='500' />
								<p><b>Php $pro_price</b></p>
								<p> $pro_desc </p>
								<a href='products.php' style='float: left;'>Go Back</a>
							 </div>
						</div>
					";
	}
}

?>
			</div>
		</div>
		<!--content area ends here-->

	</div>
	<!--content wrapper ends here-->
</div>
<!--end of products-->

  		<div id="footer">
    			<p><?php include("includes/inc_bottomcontact.php");?></p>
  		</div>


<php include("includes/inc_responsivenav_script.php");?>

	</body>
</html>