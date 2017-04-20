<!DOCTYPE html>
<html>
<head>
<?php include("includes/inc_headerscripts.php");?>
<title>Stamped. | Quality Business Cards</title>
</head>
<body>

	<div class="topnav" id="myTopnav">
		<?php include("includes/inc_navi.php");?>
	</div>

	<div class="login_container">
		<h3>Payment Details</h3>
		<form method="post" action="login_user.php">
     		Username<br>
       		<input type="text" name="username" placeholder="Username"><br>
     		Password:<br>
     		<input type="password" name="password" placeholder="Password"><br><br>
     		<button type="reset" value="Reset">Reset</button>&nbsp;&nbsp;
     		<input type="submit" value="Log In" name="submit">
     	</form>
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