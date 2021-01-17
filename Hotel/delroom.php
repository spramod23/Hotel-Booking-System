<?php
session_start();
	if(isset($_SESSION['name']))
	{
		echo "";
	}
	else
	{
		header('location: ../login.php');
	}
?>

<html>
	<head>
		<style>
			body{
				border-style: none;
				filter: blur(10px);
			}
		</style>

	</head>

<body>
	
</body>
</html>