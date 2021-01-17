<?php 
include("DBcon.php");
if(isset($_POST['Login']))
{
	$username=$_POST['txt1'];
	$password=$_POST['pwd'];
	$qry="SELECT * FROM `adminreg` WHERE `email`='$username' AND `pass`='$password'";
	$run=mysqli_query($con,$qry);
    $row=mysqli_fetch_assoc($run);
	if($row<1)
	{
		?>
			<script>
				alert("Username doesn't match");
				window.open("admin.php","_self");
			</script>
		<?php
			
	}
	else
	{
		header('location:mainadmin.php');
	}
}
?>
	