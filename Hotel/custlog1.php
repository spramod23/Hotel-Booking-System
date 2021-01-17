<?php 
include("DBcon.php");
if(isset($_POST['Submit']))
{
	$username=$_POST['txt1'];
	$password=$_POST['pwd'];
	$qry="SELECT * FROM `custreg` WHERE `email`='$username' AND `pass`='$password'";
	$run=mysqli_query($con,$qry);
    $row=mysqli_fetch_assoc($run);
    echo"hello";
	if($row<1)
	{
		?>
			<script>
				alert("Username doesn't match");
				window.open("custlog.php","_self");
			</script>
		<?php
			
	}
	else
	{
		header('location:userpage.php');
	}
}
?>