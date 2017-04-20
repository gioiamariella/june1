<?php
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<?php include("includes/inc_headerscripts.php");?>
<title>STAMPED. | Sign Up / Log In</title>
</head>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if (isset($_POST['login'])) { //login si user
		require 'loginuser.php';
	}

	elseif (isset($_POST['register']))  { //register si user
		require 'register.php';
	}
}
?>
<body>

	<div class="topnav" id="myTopnav">
		<?php include("includes/inc_navi.php");?>
	</div>

	<div class="login_nav">
		<p><a href="#signup">Sign Up</a> | <a href="#login">Log In</a></p>
	</div>

	<div class="login_container">
		<?php
			if(isset($_GET['page'])) {
				switch ($_GET['page']) {
					case 'login':
					include('includes/login.php');
					break;
					case 'register':
					include('includes/register.php');
					break;
				}
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