<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="icon.jpg">
	<title>admin portal</title>
</head>
<?php
	session_start();
	$_SESSION['admin']=0;
?>

<body style="background-color: lightblue;">
	<script type="text/javascript">
		function validate()
		{
			if(document.forms["login"]["username"].value=='')
			{
				alert("please enter username");
				return false;
			}
			else if(document.forms["login"]["password"].value=='')
			{
				alert("please enter password");
				return false;
			}
			else
			{
				return true;
			}
		}
	</script>
	<form align="center" name="login" action="admin.php" onsubmit="return validate()" method="POST">
	<br/><br/><br/>
	<?php
		if(isset($_REQUEST['submitted']))
		{
			$username=$_REQUEST['username'];
			$password=$_REQUEST['password'];
			if($username=="asgtechnologiesltd" && $password=="password")
			{
				$_SESSION['admin']=1;
				echo '<meta http-equiv="refresh" content="0; URL=adminpage.php">';
			}
			else
			{
				echo "Enter valid details";
			}
		}
	?>
	<br/>
		<label style="font-size: 30px;">&nbsp;&nbsp;USER NAME:&nbsp;&nbsp;&nbsp;<input type="text" name="username" style="width: 500px;height:30px;"></label><br/><br/><br/>
		<label style="font-size: 30px;">&nbsp;PASSWORD&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<input type="password" name="password" style="width: 500px;height:30px;"></label>
		<br/><br/>
		<button type="submit" id="submit" name="submitted" style="width: 100px;height: 40px;margin: 50px;font-size: 20px;">submit</button>
		<button type="reset" id="reset" style="width: 100px;height: 40px;margin: 50px;font-size: 20px;">reset</button>
	</form>
</body>
</html>