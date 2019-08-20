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
	<title>admin</title>
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
	<a href="admin.php" id="logout"><button>LOGOUT</button></a>
		<center>
			<table>
			<tr>
				<td>
				<a href="admin_poster.php"><button>POSTERS</button></a>
				</td>
			</tr>
			<tr>
				<td>
				<a href="admin_apps.php"><button>apps</button></a>
				</td>
			</tr>
		</table>
		</center>
</body>
</html>