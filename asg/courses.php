<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="icon.jpg">
	<title>COURSES</title>
	<style type="text/css">
		h1 {
			text-align: center;
  font-size: 100px;
  color: red;
  -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
  -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
  animation-name: example;
  animation-duration: 4s;
  animation-iteration-count: infinite;
}

/* Standard syntax */
@keyframes example {
  0%   {color:purple;}
  25%  {color:yellow;}
  50%  {color:orange;}
  75%  {color:green;}
  100% {color:purple;}
}
table tr td div
{
	margin-bottom: 50px;
}
div
{
	width: 350px;
	height: 350px;
	background-color: rgb(0,0,0,0.3);
	border-radius: 30px;
}
h2
{
	text-align: center;
}
</style>
</head>
<body style="background-image: url('bg.jpg');background-size: 200%;">
<h1>COURSES</h1>
<h5 id="scroll" style="text-align: center;">scroll down</h5>
<table id="main" align="center">
<tr>
<td>
<div>
	<br/>
	<h2 style="background-color: blue">C PROGRAMMING</h2>
	<h2>online course</h2>
	<h2>available both certified and non-certified</h2>
	<h2>certified course : Rs.1000</h2>
	<h2>non-certified course : Rs.700</h2>
	<a href="javascript:cp()"><h2 style="color: black;background-color: blue">REGISTER</h2></a>
</div>
</td>
</tr>
<tr>
<td>
<div>
	<br/>
	<h2 style="background-color: blue">PYTHON PROGRAMMING</h2>
	<h2>online course</h2>
	<h2>available both certified and non-certified</h2>
	<h2>certified course : Rs.1000</h2>
	<h2>non-certified course : Rs.700</h2>
	<a href="javascript:python()"><h2 style="color: black;background-color: blue">REGISTER</h2></a>
</div>
</td>
</tr>
<tr>
	<td>
<div>
	<br/>
	<h2 style="background-color: blue">PROGRAMMING WITH C++</h2>
	<h2>online course</h2>
	<h2>available both certified and non-certified</h2>
	<h2>certified course : Rs.1000</h2>
	<h2>non-certified course : Rs.700</h2>
	<a href="javascript:cpp()"><h2 style="color: black;background-color: blue">REGISTER</h2></a>
</div>
</td>
</tr>
</table>
<table id="ccheck" align="center" style="background-color: green;visibility: collapse;width: 50%;height:50%;">
	<tr>
	<td>
	<a href="https://imojo.in/39rpjjr"><button style="text-align: center;width:100%;height:100%; border-width: 50px;font-size: 25px;color: green;">CERTIFIED</button></a>
	</td>
	<td>
	<a href="https://imojo.in/3alh7hl"><button style="text-align: center;width:100%;height:100%; border-width: 50px;font-size: 25px;color: green;">NON CERTIFIED</button></a>
	</td>
	</tr>
</table>
<table id="pythoncheck" align="center" style="background-color: green;visibility: collapse;width: 50%;height:50%;">
	<tr>
	<td>
	<a href="https://imojo.in/4abhips"><button style="text-align: center;width:100%;height:100%;border-width: 50px;font-size: 25px;color: green;">CERTIFIED</button></a>
	</td>
	<td>
	<a href="https://imojo.in/297xkvw"><button style="text-align: center;width:100%;height:100%; border-width: 50px;font-size: 25px;color: green;">NON CERTIFIED</button></a>
	</td>
	</tr>
</table>
<table id="cppcheck" align="center" style="background-color: green;visibility: collapse;width: 50%;height:50%;">
	<tr>
	<td>
	<a href="https://imojo.in/21476h4"><button style="text-align: center;width:100%;height:100%; border-width: 50px;font-size: 25px;color: green;">CERTIFIED</button></a>
	</td>
	<td>
	<a href="https://imojo.in/1jl3p8j"><button style="text-align: center;width:100%;height:100%; border-width: 50px;font-size: 25px;color: green;">NON CERTIFIED</button></a>
	</td>
	</tr>
</table>
<table id="back" align="center" style="visibility: hidden;">
	<tr><td><a href="courses.php"><button style="text-align: center;width:200px;height:30px;">BACK</button></a></td></tr>
</table>
<script type="text/javascript">
	var mainVar=document.getElementById("main");
	var cCheckVar=document.getElementById("ccheck");
	var pythonCheckVar=document.getElementById("pythoncheck");
	var cppCheckVar=document.getElementById("cppcheck");
	var backVar=document.getElementById("back");
	var scrollVar=document.getElementById("scroll");
	function cp()
	{
		mainVar.innerHTML="C PROGRAMMING<br/><br/>";
		cCheckVar.style.visibility='visible';
		pythonCheckVar.style.visibility='collapse';
		cppCheckVar.style.visibility='collapse';
		backVar.style.visibility='visible';
		scrollVar.style.visibility='collapse';
	}
	function python()
	{
		mainVar.innerHTML="PYTHON PROGRAMMING<br/><br/>";
		cCheckVar.style.visibility='collapse';
		pythonCheckVar.style.visibility='visible';
		cppCheckVar.style.visibility='collapse';
		backVar.style.visibility='visible';
		scrollVar.style.visibility='collapse';
	}
	function cpp()
	{
		mainVar.innerHTML="PROGRAMMING WITH C++<br/><br/>";
		cCheckVar.style.visibility='collapse';
		pythonCheckVar.style.visibility='collapse';
		cppCheckVar.style.visibility='visible';
		backVar.style.visibility='visible';
		scrollVar.style.visibility='collapse';
	}
</script>
</body>
</html>