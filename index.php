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

<div class="bgimg-1">
  <div class="caption">
    <span class="border">STAMPED.</span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;height:90%;">
  <h3 style="text-align:center; font-family: 'Lora', serif;"">We keep it classy.</h3></i>
  <p><i><center>Here at <b>STAMPED.</b>, we'll help you make a good, lasting first impression.</center></p>
  <div id="homedesc">
      <center><b>Choose a template</b><br>
      <img src="images/template_icon.png" height="100px"/></center>
      <p>Pressed for time? Want an instant, quality design for your card? Pick from our collection of designer-made templates!</p>
      <div class="button"><a href="products.php">Check it out</a></div>
  </div>

  <div id="homedesc">
      <center><b>The Customizer</b><br>
      <img src="images/customizer_icon.png" height="100px"/></center>
      <p>Feeling a bit artsy? Why not create your own calling card from scratch! Add flowers, choose a font - you name it, you can do it!</p>
      <div class="button"><a href="customizer.php">Check it out</a></div>
  </div>

  <div id="homedesc">
      <center><b>Upload Your Own</b><br>
      <img src="images/upload_icon.png" height="100px"/></center>
      <p>Already have a design but have no idea where to get it printed? You've come to the right place! We'll print it for you, top-quality.</p>
      <div class="button"><a href="uploader.php">Check it out</a></div>
  </div>
</div>
    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page
     -->
<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #484848;text-shadow: 2px 2px 4px #ffffff;">Quality business cards at affordable prices.</span>
  </div>
</div>

<!--<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
  </div>
</div>

<div class="bgimg-3">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">SCROLL UP</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
  </div>
</div> 

<div class="bgimg-1">
  <div class="caption">
    <span class="border">COOL!</span>
  </div>-->
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