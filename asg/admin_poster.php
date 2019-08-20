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
	<title>adimin_posters</title>
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
	<a href="flogout.php" id="log"><button>LOGOUT</button></a>
	<center>
			<table>
			<tr>
				<a href="pending.php"><button> pending <br/>works</button></a>
			</tr>
			<tr>
				<td>
				<a href="allclients.php"><button> All <br/>Clients</button></a>
				</td>
				<td>
				<a href="calledclients.php"><button>Called<br/> Clients</button></a>
				</td>
			</tr>
			<tr>
				<td>
				<a href="newclients.php"><button>New<br/> Clients</button></a>
				</td>
				<td>
				<a href="oldclients.php"><button>Old <br/>Clients</button></a>
				</td>
			</tr>
			<tr>
				<td>
				<a href="posters.php"><button>Add <br/>Client</button></a>
				</td>
				<td>
				<a href="removeclient.php"><button>Remove <br/>Client</button></a>
				</td>
			</tr>
			<tr>
				<td>
				<a href="markcalled.php"><button>mark <br/>as <br/>called</button></a>
				</td>
				<td>
				<a href="markcompleted.php"><button>mark <br/>as <br/>completed</button></a>
				</td>
			</tr>
			<tr>
				<td>
				<a href="markuncalled.php"><button>mark <br/>as <br/>un called</button></a>
				</td>
				<td>
				<a href="markuncompleted.php"><button>mark <br/>as <br/>un completed</button></a>
				</td>
			</tr>
		</table>
		</center>
</body>
</html>