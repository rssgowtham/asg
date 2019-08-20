<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="icon.jpg">
	<title>POSTERS</title>
	<style type="text/css">
		#submit:hover
		{
			background-color: green;
			color: yellow;
		}
		#reset:hover
		{
			background-color: brown;
			color: white;
		}
	</style>
</head>
<?php
		if(isset($_REQUEST['submitted']))
		{
			$name=$_REQUEST['name'];
			$phone=$_REQUEST['mobile'];
			$purpose=$_REQUEST['purpose'];
			$connection=mysqli_connect("localhost", "root", "", "posters");
			mysqli_query($connection,"INSERT INTO `clients`(`name`,`phone`,`purpose`,`called`,`completed`,`dateandtime`) VALUES ('$name','$phone','$purpose',0,0,NOW())");
			echo '<meta http-equiv="refresh" content="0; URL=added.php">';
		}
	?>
<body style="background-color: lightblue;">
	<script type="text/javascript">
		var body=document.getElementById("body")
		function validate()
		{
			if(document.forms["form"]["name"].value=='')
			{
				alert("please enter name");
				return false;
			}
			else if(document.forms["form"]["mobile"].value=='')
			{
				alert("please enter mobile number");
				return false;
			}
			else if(document.forms["form"]["purpose"].value=='')
			{
				alert("please enter purpose");
				return false;
			}
			else
			{
				return true;
			}
		}
	</script>
	<h1 align="center" style="color: red">Don't waste money for printing posters......</h1>
	<ul style="color: green;font-size: 30px;">Here we are giving you digital posters with best quality at best price. 
		<li style="color: black;font-size: 20px;">You can advertize your business</li>
		<li style="color: black;font-size: 20px;">You can invite to your marriage through online wedding cards</li>
		<li style="color: black;font-size: 20px;">You can publicize your achievements</li>
	</ul>
	<h2 align="center">Submit the following details. We will contact you soon...</h2>
	<form align="center" name="form" action="posters.php" onsubmit="return validate()" method="POST">
	<br/>
		<label style="font-size: 30px;">&nbsp;&nbsp;Name:&nbsp;&nbsp;&nbsp;<input type="text" name="name" style="width: 500px;height:30px;"></label><br/>
		<label style="font-size: 30px;">&nbsp;mobile:&nbsp;&nbsp;&nbsp;<input type="phone" name="mobile" style="width: 500px;height:30px;"></label>
		<br/><br/><br/>
		<label style="font-size: 30px;">purpose:&nbsp;&nbsp;&nbsp;<textarea name="purpose" style="width: 500px;height:100px;"></textarea></label>
		<br/><br/>
		<button type="submit" id="submit" name="submitted" style="width: 100px;height: 40px;margin: 50px;font-size: 20px;">submit</button>
		<button type="reset" id="reset" style="width: 100px;height: 40px;margin: 50px;font-size: 20px;">reset</button>
	</form>
</body>
</html>