<!DOCTYPE html>
<html>
<head>
<link rel ="stylesheet" type="text/css" href="styles/style.css" />
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
  background-image: url("https://www.w3schools.com/howto/img_parallax2.jpg");
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

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;height:auto;">
  <h3 style="text-align:center;">We keep it classy.</h3>
  <p>Here at <b>STAMPED.</b>, we'll help you make a good, lasting first impression.</p>
  <div id="homedesc">
      <b class="desctitle">Choose a template</b>
      <p class="homedesc">Pressed for time? Want an instant, quality design for your card? Pick from our collection of designer-made templates!</p>
  </div>

  <div id="homedesc">
      <b class="desctitle">The Customizer</b>
      <p class="homedesc">Feeling a bit artsy? Why not create your own calling card from scratch! Add flowers, choose a font - you name it, you can do it!</p>
  </div>

  <div id="homedesc">
      <b class="desctitle">Upload Your Own</b>
      <p class="homedesc">Already have a design but have no idea where to get it printed? You've come to the right place! We'll print it for you, top-quality.</p>
  </div>
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Quality business cards at affordable prices.</span>
  </div>
</div>

<div style="position:relative;">
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