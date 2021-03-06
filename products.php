<!DOCTYPE html>
<?php
	include("functions/functions.php")
?>
<html>
<head>
<?php include("includes/inc_headerscripts.php");?>
<title>Stamped. | Quality Business Cards</title>
</head>
  <body oncontextmenu="return false;">
    <div class="topnav" id="myTopnav">
        <?php include("includes/inc_navi.php");?>
    </div>



<!--start of products-->

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
				<?php getPro( ); ?>
				<?php
					if(isset($_GET['pro_id'])){
					include('details.php');}?>
			</div>
		</div>
		<!--content area ends here-->

	</div>
	<!--content wrapper ends here-->
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
