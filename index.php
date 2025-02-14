<!DOCTYPE html>
<html>
<title>paige does stuff</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>

@font-face {
  font-family: fancy me;
  src: url(http://paigedoesstuff.com/wp-content/themes/twentynineteen/fonts/FancyMe.otf);
  font-weight: normal;
}

body,h1 {font-family: "Montserrat", sans-serif}
img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}

h1 {
  padding-bottom: 0;
  font-size: 230px;
  font-family: fancy me;
  line-height: 1.0
}

h2 {
  font-size: 50px;
  font-family: fancy me;
}

h3 {
  font-size: 10px;
  font-family: biko;
  letter-spacing: 60px;
}

h4 {
  font-size: 25px;
  font-family: breamcatcher;
  color: gray
}


.Imageborder {
  border-width:1px;
  border-color:black;
}

</style>
<body>


<!-- Sidebar -->
<nav class="w3-sidebar w3-white w3-animate-top w3-xxlarge" style="display:none;padding-top:150px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-black w3-xxlarge w3-padding w3-display-topright" style="padding:6px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center w3-white">
    <a href="template2.html" class="w3-bar-item w3-button w3-text-grey w3-hover-white" style="font-family:biko; font-size: 70px">home</a>
    <a href="gallery.html" class="w3-bar-item w3-button w3-text-grey w3-hover-white" style="font-family:biko; font-size: 70px">visual stuff</a>
    <a href="blog1.html" class="w3-bar-item w3-button w3-text-grey w3-hover-white" style="font-family:biko; font-size: 70px">wordy stuff</a>
    <a href="#" class="w3-bar-item w3-button w3-text-grey w3-hover-white" style="font-family:biko; font-size: 70px">meme of the day</a>
  </div>
</nav>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

<!-- Header -->
<span class="w3-button w3-xxlarge w3-white w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></span>
<div class="w3-clear"></div>
<header class="w3-left w3-margin-bottom" style="margin-top:90px">
  <h1><b>PAIGE
  DOES
  STUFF.</b></h1>
</header>
</div>

<img src="flower1.jpg" style="width:60%; margin-left:280px">

<div class="w3-white w3-padding-64 w3-center" id="about">
  <h2>BUT WHAT STUFF</h2>
  <h4>because apparently she does stuff, she says</h4>
  <form style="margin:auto;width:75%; margin-top:5px;line-height:25px" action="/action_page.php" target="_blank">
    <p>Alright, so we've got some options for your perusing pleasure so that you can learn more about what this website
    is all about. But first things first, just want to clarify something. This isn't a blog, and this isn't a photo gallery.
    To be honest, I don't know what it is, but I know that there are some words that come stright from my noggin and some
    pictures that were snapped by yours truly somewhere on here, so the handy dandy menu up there will tell you what's
    what. I hope you enjoy the hodgepodge of thoghts and photos that I've pieced together, and I actually don't have
    all of those social media gadgets down below. I just like the look of them.</p>
  </form>
</div>

<img src="flowers3.jpg" style="width:60%" class="w3-center">


<div id="modal01" class="w3-modal w3-white" style="padding-top:0" onclick="this.style.display='none'" style="width:80%">
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64" style="width:80%">
    <span class="w3-button w3-xlarge w3-display-topright">×</span>
    <img id="img01" class="w3-image">
    <p id="caption"></p>
  </div>
</div>

<!-- End Page Content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:128px">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

<script>
// Toggle grid padding
function myFunction() {
  var x = document.getElementById("myGrid");
  if (x.className === "w3-row") {
    x.className = "w3-row-padding";
  } else {
    x.className = x.className.replace("w3-row-padding", "w3-row");
  }
}

// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.width = "100%";
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

</script>

</body>
</html>
