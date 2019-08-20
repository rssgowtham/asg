<?php
session_start();
$_SESSION['var']=0;
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="icon.jpg">
	<title>ASG TECHNOLOGIES LTD</title>
<style>


/* Style the header */
header {
  padding: 30px;
  margin-top: 50px;
  margin-bottom: 50px;
  text-align: center;
  font-size: 35px;
  color: pink;
  -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
  -webkit-animation-duration: 8s; /* Safari 4.0 - 8.0 */
  animation-name: example;
  animation-duration: 4s;
  animation-iteration-count: infinite;
}
@keyframes example {
  0%   {color:green;}
  25%  {color:blue; }
  50%  {color:red;  }
  75%  {color:white;}
  100% {color:green;}
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}


/* Style the footer */
p {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
  position: absolute;
}

header div h4{
	color: blue;
}
#navbar {
  overflow: hidden;
  background-color: rgba(0,26,256,0.3);
  margin-left: 30px;
  margin-right: 30px;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.sticky {
  position: fixed;
  top: 0;
  width: 95%;

  margin-left: 30px;
  margin-right: 30px;
}
table tr td a:hover
{
	background-color: blue;	
}

h3
{
	color: yellow;
	text-align:center;
}
h4
{
	color: yellow;
	text-align: center;
}
.mySlides {display:none;}
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</style>
</head>
<body style="background-image: url('img.jpg');">
<div id="navbar">
  <a class="active" id="home" href="javascript:Home()">Home</a>
  <a id="earn" href="javascript:Earn()">Syllabus</a>
  <a id="contact" href="javascript:Contact()">Contact</a>
  <a id="store" href="https://www.instamojo.com/asgtechnologiesltd/?ref=profile_bar">Store</a>
</div>
<header>
	<table>
		<tr>
			<td>
  <h2 style="font-size: 70px;">ASG TECHNLOGIES LTD</h2>
  <h4 style="color: white;font-size: 70px;">scroll down</h4>
  </td>
  <td width="70px">
  <td>
	<div class="w3-content w3-section" style="max-width:500px">
	
  <div class="mySlides" align="right"  style="width:400px;height: 500px;background-color: rgba(1,0,1,0.8);border-radius: 40px;"><h3>WEBSITES</h3>
	<h4 style="color: white;font-size: 40px;">Based on your requirements</h4><br/></div>
  <div class="mySlides"  style="width:400px;height: 500px;background-color: rgba(1,0,1,0.8);border-radius: 40px;">
  	<h3>ANDROID<br/>APPLICATIONS</h3>
	<h4 style="color: white;font-size: 40px;">Based on your requirements</h4><br/>
  </div>
  <div class="mySlides"  style="width:400px;height: 500px;background-color: rgba(1,0,1,0.8);border-radius: 40px;">
  	<h3>TECHNICAL<br/>COURSES</h3>
	<h4 style="color: white;font-size: 40px;">certified : Rs.600</h4>
	<h4 style="color: white;font-size: 40px;">non-certified : Rs.500</h4>
  </div>
  <div class="mySlides"  style="width:400px;height: 500px;background-color: rgba(1,0,1,0.8);border-radius: 40px;">
  	<h3>DIGITAL<br/>POSTERS</h3>
	<h4 style="color: white;font-size: 40px;">Rs.100</h4>
  </div>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
	</td>
  </tr>
  </table>
</header>
<table id='basic' align="center" style="border-spacing: 50px;position: absolute;"></table>
<table id="homeData" align="center" style="visibility: hidden;position: absolute;width: 0px;height: 0px;">
<tr>
	<td>
<a href="websites.php"><div id="websites" style="background-color: green;border-radius: 30px; width: auto;height: 250px;padding: 30px;">
	<h3>WEBSITES</h3>
	<br/><br/>
	<h4>Based on your requirements</h4><br/>
	</div></a>
	</td>
	<td>
<a href="apps.php"><div id="apps" style="background-color: blue;border-radius: 30px;width: auto;height: 250px;padding: 30px;">
	<h3>ANDROID<br/>APPLICATIONS</h3>
	<br/>
	<h4>Based on your requirements</h4><br/>
	</div></a>
	</td>
	<td>
<a href="courses.php"><div  id="tc" style="background-color: red;width: auto;border-radius: 30px;height: 250px;padding: 30px;">
	<h3>TECHNICAL<br/>COURSES</h3>
	<br/>
	<h4>certified : Rs.600</h4><br/>
	<h4>non-certified : Rs.500</h4>
	</div></a>
	</td>
	<td>
<a href="posters.php"><div id="posters" style="background-color: purple;width: auto;border-radius: 30px;height: 250px; padding: 30px;">
	<h3>DIGITAL<br/>POSTERS</h3><br/>
	<h4>Rs.100</h4>
	</div></a>
	</td>
</tr>
</table>
<table id="earnData" align="center" style=" display: none;position: absolute;width: 0px;height: 0px;">
	<tr>
		<td>
		<div style="background-color: rgba(1,1,0,0.7);width: auto;border-radius: 30px;height: auto; padding: 30px;">
			<h1 style="color: yellow;">C Programming :-</h1>
			<h3 style="color: white;">1. Basics of C</h3>
			<h3 style="color: white;">2. Functions in C</h3>
			<h3 style="color: white;">3. Pointers in c</h3>
			<h3 style="color: white;">4. Structures and Unions in c</h3>
			<h3 style="color: white;">5. Memory allocation in c</h3>
			<h3 style="color: white;">6. Dynamic programming in c</h3>
			<h3 style="color: white;">7. File handling in c</h3>
			<h3 style="color: white;">ASSIGNMENTS WILL BE GIVEN AND TESTS WILL BE CONDUCTED</h3>
		</div>
		</td>
		<td>
			<a href="courses.php"><div align="center" style="padding:30px;border-radius: 20px;color: yellow;background-color: green;width: 200px;height: 30px;">REGISTER</div></a>
		</td>
	</tr>
	</script>
	<tr>
		<td>
		<div style="background-color: rgba(1,1,0,0.7);width: auto;border-radius: 30px;height: auto; padding: 30px;">
			<h1 style="color: yellow;">Programming with c++ :-</h1>
			<h3 style="color: white;">1. Basics of C++</h3>
			<h3 style="color: white;">2. functions in C++</h3>
			<h3 style="color: white;">3. Classes in C++</h3>
			<h3 style="color: white;">4. Objects in C++</h3>
			<h3 style="color: white;">5. Oops concepts in C++</h3>
			<h3 style="color: white;">6. Dynamic programming in C++</h3>
			<h3 style="color: white;">7. File handling in C++</h3>
			<h3 style="color: white;">ASSIGNMENTS WILL BE GIVEN AND TESTS WILL BE CONDUCTED</h3>
		</div>
		</td>
		<td>
			<a href="courses.php"><div id="register" align="center" style="padding:30px;border-radius: 20px;color: yellow;background-color: green;width: 200px;height: 30px;">REGISTER</div></a>
		</td>
	</tr>
	<tr>
		<td>
		<div style="background-color: rgba(1,1,0,0.7);width: auto;border-radius: 30px;height: auto; padding: 30px;">
			<h1 style="color: yellow;">Python Programming :-</h1>
			<h3 style="color: white;">1. Python installation</h3>
			<h3 style="color: white;">2. Basics of Python</h3>
			<h3 style="color: white;">3. Python IDLE</h3>
			<h3 style="color: white;">4. Python Strings</h3>
			<h3 style="color: white;">5. Functions in Python</h3>
			<h3 style="color: white;">6. Lists in python</h3>
			<h3 style="color: white;">7. tuples in python</h3>
			<h3 style="color: white;">8. Dictionaries in python</h3>
			<h3 style="color: white;">ASSIGNMENTS WILL BE GIVEN AND TESTS WILL BE CONDUCTED</h3>
		</div>
		</td>
		<td>
			<a href="courses.php"><div align="center" style="padding:30px;border-radius: 20px;color: yellow;background-color: green;width: 200px;height: 30px;">REGISTER</div></a>
		</td>
	</tr>
</table>
<table id="contactData" align="center" style="visibility: hidden; position: absolute;width: 0px;height: 0px;">
	<tr>
		<td>
		<div style="background-color: #777;width: auto;height: auto;padding: 10px;border-radius: 40px;">
		<h2 style="color: white"><span style="color: yellow;"> Ph : </span>6302656406</h2>
		<h2><span style="color: yellow;">Email : </span> <a style="color: white;" href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJlKFcDVQqSQTRpMTTtQJxCfdDQJhQwjqjPwdRgGKkHHwlMdSrVJHJMVZXcxRjSVKzBnRvq">asgtechnologiesltd@gmail.com</a></h2>
		</div>
		</td>
	</tr>
</table>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
	var homeVar = document.getElementById("home");
	var earnVar = document.getElementById("earn");
	var contactVar = document.getElementById("contact");
	var homeDataVar = document.getElementById("homeData");
	var earnDataVar = document.getElementById("earnData");
	var contactDataVar = document.getElementById("contactData");
	var basicVar = document.getElementById("basic");
	basicVar.innerHTML=document.getElementById("homeData").innerHTML;
function Home()
{
	homeVar.classList.add("active");
	earnVar.classList.remove("active");
	contactVar.classList.remove("active");
	basicVar.innerHTML=document.getElementById("homeData").innerHTML;
	/*homeDataVar.style.visibility='visible';
	earnDataVar.style.visibility='hidden';
	contactDataVar.style.visibility='hidden';*/
}
function Earn()
{
	earnDataVar.style.display='visible';
	homeVar.classList.remove("active");
	earnVar.classList.add("active");
	contactVar.classList.remove("active");
	basicVar.innerHTML=document.getElementById("earnData").innerHTML;
	/*earnDataVar.style.visibility='visible';
	contactDataVar.style.visibility='hidden';*/
}
function Contact()
{
	homeVar.classList.remove("active");
	earnVar.classList.remove("active");
	contactVar.classList.add("active");
	basicVar.innerHTML=document.getElementById("contactData").innerHTML;
	/*homeDataVar.style.visibility='hidden';
	earnDataVar.style.visibility='hidden';
	contactDataVar.style.visibility='visible';*/
}
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>