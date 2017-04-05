<!DOCTYPE html>
<html>
<head>
<link rel ="stylesheet" type="text/css" href="styles/style.css" />
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
<title>Stamped. | Quality Business Cards</title>
<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  background-position: center;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("images/homepage_cards.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("images/homepage_cards_mockup.jpg");
  min-height: 400px;
}

.bgimg-3 {
  background-image: url("https://www.w3schools.com/howto/img_parallax3.jpg");
  min-height: 400px;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

b {
  font-family: 'Lora', serif;
}

</style>
</head>
<body>

		<div class="topnav" id="myTopnav">
  			<?php include("includes/inc_navi2.php");?>
		</div>

<div class="bgimg-1">
  <div class="caption">
    <span class="border">STAMPED.</span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;height:60%;">
  <h3 style="text-align:center;">We keep it classy.</h3>
  <p><center>Here at <b>STAMPED.</b>, we'll help you make a good, lasting first impression.</center></p>
  <div id="homedesc">
      <center><b>Choose a template</b><br>
      <img src="images/template_icon.png"/></center>
      <p>Pressed for time? Want an instant, quality design for your card? Pick from our collection of designer-made templates!</p>
  </div>

  <div id="homedesc">
      <center><b>The Customizer</b><br>
      <img src="images/customizer_icon.png"/></center>
      <p>Feeling a bit artsy? Why not create your own calling card from scratch! Add flowers, choose a font - you name it, you can do it!</p>
  </div>

  <div id="homedesc">
      <center><b>Upload Your Own</b><br>
      <img src="images/upload_icon.png"/></center>
      <p>Already have a design but have no idea where to get it printed? You've come to the right place! We'll print it for you, top-quality.</p>
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