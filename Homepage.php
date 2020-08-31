<!DOCTYPE html>
<html lang="en">
<title>INNERWORK</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<nav class="w3-sidebar w3-black w3-collapse w3-top w3-large w3-padding"  style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
<img src="https://media-exp1.licdn.com/dms/image/C510BAQFlsGyoHivxug/company-logo_200_200/0?e=2159024400&v=beta&t=FlV_yW4u4ggZENRKl8UxnhnYOXI2VugPrYQkmfIIYVY" alt="capture" width="200" height="150">
    <h3 class="w3-padding-64"><b>Innerwork<br>Solutions Private Limited</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="./admin/index.php"  class="w3-bar-item w3-button w3-hover-white">Admin Login</a> 
    <a href="index.php"  class="w3-bar-item w3-button w3-hover-white">Attendance</a> 
    <a href="view_attendance.php"  class="w3-bar-item w3-button w3-hover-white">View Attendance</a> 
    <a href="leave.php"  class="w3-bar-item w3-button w3-hover-white">Apply for Leave</a> 
    <a href="leave_status.php"  class="w3-bar-item w3-button w3-hover-white">Leave Status</a> 
    
  </div>
</nav>

<!-- Header -->
  
<link rel="stylesheet" type="text/css" href="mystyle.css">

  <div class="office-wrap">
	<div class="note"><span >Innerwork</span><span>Solution</span></div>
	<div class="clock"></div>
	<div class="plant">
		<div class="leaves">
			<div class="leaf leaf-a"></div>
			<div class="leaf leaf-b"></div>
			<div class="leaf leaf-c"></div>
			<div class="leaf leaf-d"></div>
		</div>
	</div>
	<div class="table">
		<div class="cup"></div>
		<div class="monitor">
			<div class="text"><span>G</span><span>o</span><span>o</span><span>g</span><span>l</span><span>e</span></div>
		</div>
	</div>
	<div class="designer">
		<div class="head"><div class="head-phone"></div></div>
		<div class="body">
			<div class="hand"></div>
			<div class="legs">
				<div class="leg leg-left"></div>
				<div class="leg leg-right"></div>
			</div>
		</div>
		<div class="info">
			<span>Hi, It's me Anil from Innerwork Solutions Pvt Ltd. I'm a web and graphics designer. Designing is my passion and I am still learning and developing my skills on graphics designing and coding. I have been working on various designing projects.</span>
		</div>
	</div>
	<div class="chair">
		<div class="frame"></div>
		<div class="wheels">
			<div class="wheel wheel-a"></div>
			<div class="wheel wheel-b"></div>
		</div>
	</div>
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
