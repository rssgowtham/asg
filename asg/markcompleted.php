<?php
	session_start();
	if($_SESSION['admin']==0)
	{
		echo '<meta http-equiv="refresh" content="0; URL=admin.php">';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="icon.jpg">
	<title>MARK COMPLETED</title>
	<style type="text/css">
		button
			{
				font-size: 17px;
				width:150px;
				height:150px;
				background-color: pink;
			}
			button:hover
			{
				background-color: blue;
			}
	</style>
</head>
<body style="background-color: lightblue;">
<script type="text/javascript">
		var body=document.getElementById("body")
		function validate()
		{
			if(document.forms["form"]["id"].value=='')
			{
				alert("please enter id");
				return false;
			}
			else
			{
				return true;
			}
		}
	</script>
	<a href="admin.php"><button>LOGOUT</button></a>
	<a href="admin_poster.php"><button>posters</button></a>
	<a href="adminpage.php"><button>home</button></a>
<form align="center" name="form" action="markcompleted.php" onsubmit="return validate()" method="POST">
	<?php
$connection=mysqli_connect("localhost", "root", "", "posters");
if(isset($_REQUEST['submitted']))
{
	$id=$_REQUEST['id'];
	$query=mysqli_query($connection,"SELECT `id` FROM `clents` WHERE `id`='$id'");
if(mysqli_num_rows($query)>0){
	mysqli_query($connection,"UPDATE `clients` SET `completed`='1' WHERE `id`='$id'");
	echo "id no ".$id." marked as completed";
}
else
	{
	echo "invalid id";	
	}
}
?><br/><br/>
		<label>id : </label><input type="text" name="id">
		<br/><br/><br/>
		<button type="submit" id="submit" name="submitted" style="width: 100px;height: 40px;margin: 50px;font-size: 20px;">submit</button>
		<button type="reset" id="reset" style="width: 100px;height: 40px;margin: 50px;font-size: 20px;">reset</button>
</form>
</body>
</html>