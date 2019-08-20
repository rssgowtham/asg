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
	<title>CALLED CLIENTS</title>
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

	<a href="admin.php"><button>LOGOUT</button></a>
	<a href="admin_webs.php"><button>websites</button></a>
	<a href="adminpage.php"><button>home</button></a>
<?php
$connection=mysqli_connect("localhost", "root", "", "posters");
$query=mysqli_query($connection,"SELECT `id`,`name`,`phone`,`purpose`,`called`,`completed`,`dateandtime` FROM `websites` WHERE `called`='1'");
if(mysqli_num_rows($query)>0)
{
while ($data=mysqli_fetch_array($query)) {
	echo "<p style=font-size:50px> ".$data['id']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$data['name']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$data['phone']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$data['purpose']."</p>";
}
}
else
{
	echo "<p style=font-size:50px>No called clients</p>";
}
?>
</body>
</html>