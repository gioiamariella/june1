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

	<p><a href="#signup">Sign Up</a> | <a href="#login">Log In</a></p>

	<div class="login_container">
		<div id="login">
			<h1>Welcome Back!</h1>
			<form action ="login.php" method="post" autocomplete="off">
				<b>Email Address*</b>:&nbsp;
				<input type="email" required autocomplete="of" name="email"/>
				<br>
				<b>Password:*</b>:&nbsp;
				<input type="password" required autocomplete="off" name="password"/>
				<br>
				<p style="float: right;"><a href="forgot.php">Forgot Password?</a></p>
				<button name="login"/>Log In</button>
			</form>
		</div>

		<div id="signup">
			<form action="login.php" method="post" autocomplete="off">
				<b>First Name</b>:&nbsp;
				<input type="text" required autocomplete="off" name='firstname'/>
				<br>
				<b>Last Name</b>:&nbsp;
				<input type="text" required autocomplete="off" name='firstname'/>
				<br>
				<b>Email Address:</b>&nbsp;
				<input type="email" required autocomplete="off" name='email'/>
				<br>
				<b>Set A Password:</b>&nbsp;
				<input type="password" required autocomplete="off" name='password'/>
				<button type="submit" name="register"/>Register</button>
			</form>
		</div>
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