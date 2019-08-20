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
	<title>adimin_websites</title>
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
	<a href="adminpage.php"><button>Home</button></a>
	<center>
			<table>
			<tr>
				<a href="webs_pending.php"><button> pending <br/>works</button></a>
			</tr>
			<tr>
				<td>
				<a href="webs_allclients.php"><button> All <br/>Clients</button></a>
				</td>
				<td>
				<a href="webs_calledclients.php"><button>Called<br/> Clients</button></a>
				</td>
			</tr>
			<tr>
				<td>
				<a href="webs_newclients.php"><button>New<br/> Clients</button></a>
				</td>
				<td>
				<a href="webs_oldclients.php"><button>Old <br/>Clients</button></a>
				</td>
			</tr>
			<tr>
				<td>
				<a href="webs.php"><button>Add <br/>Client</button></a>
				</td>
				<td>
				<a href="webs_removeclient.php"><button>Remove <br/>Client</button></a>
				</td>
			</tr>
			<tr>
				<td>
				<a href="webs_markcalled.php"><button>mark <br/>as <br/>called</button></a>
				</td>
				<td>
				<a href="webs_markcompleted.php"><button>mark <br/>as <br/>completed</button></a>
				</td>
			</tr>
			<tr>
				<td>
				<a href="webs_markuncalled.php"><button>mark <br/>as <br/>un called</button></a>
				</td>
				<td>
				<a href="webs_markuncompleted.php"><button>mark <br/>as <br/>un completed</button></a>
				</td>
			</tr>
		</table>
		</center>
</body>
</html>