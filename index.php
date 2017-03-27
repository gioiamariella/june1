<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>Stamped. | Quality Business Cards</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />  
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
		<link rel ="stylesheet" type="text/css" href="styles/style.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
	</head>
	<body oncontextmenu="return false;">
		<div class="topnav" id="myTopnav">
  			<?php include("includes/inc_navi2.php");?>
		</div>

		<div class="dynamic_content">
			<?php 
				if(isset($_GET['page'])) {
					switch ($_GET['page']) {
						case 'products':
						include('products.php');
						break;
						case 'customizer':
						include('customizer.php');
						break;
						case 'terms':
						include('terms.php');
						break;
						case 'uploader':
						include('uploader.php');
						break;
//						case 'home_page':
//						default:
//						include('home.php');
//						break;
					}
				}
//				else
//				include('home.php');
			?>
		</div>

  		<div id="footer">
    			<p><?php include("includes/inc_bottomcontact.php");?></p>
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