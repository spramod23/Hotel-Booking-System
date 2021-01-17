<html>
<head>
    <?php include("header.php") ?>
	<link rel="stylesheet" type="text/css" href="contactus.css" >
    <title>Contact Us</title>
    <style>
		body{
			top:0;
			left:0;
		}
    .contact{
	
        margin:50px;padding:10px;
        background-image: linear-gradient(145deg,lightsalmon,coral,orangered,red);
		box-shadow: 0px 5px 5px 5px black;
		width:300px;
    
}
    .pr{
        font-family: Times New Roman,serif;
	}
	
	#sub{
               
			   background-color:transparent;
			   border-style: none; 
			   border-bottom:2px solid black;
			   font-weight:bold;
			   color:black;
			   font-style:italic;
			   width:80px; 
			   font-size:15px;
			   box-shadow:2px 0px 2px 2px black;
   
			  }
			  #sub:hover{
				  
				  background-color:rgba(65,90,189,0.2);
				  border-style: none; 
				  border-bottom:2px solid black;
				  font-weight:bold;
				  color:black;
				  font-style:italic;
				  width:80px; 
				  font-size:15px;
				  box-shadow: 0px 3px 3px 2px ;
				  transition:0.2s;
				 }
	form{
		font-weight:bolder;
	}
	textarea{
		height:100px;
		background:transparent;
		border-style:none;
		border-bottom: 2px solid black;
	}
	textarea:hover{
		font-style:italic;
		font-weight:bold;
		height:100px;
		background:white;
		border-style:none;
		border-bottom: 2px solid black;
		/*background-color:transparent;*/
        box-shadow: 0px 3px 3px 3px ;
        transition:0.2s;
	}
	.inp2{
            background-color:transparent;
            border-style: none; 
            border-bottom:2px solid black;
           }
           .inp2:hover{
            background-color:transparent;
            border-style: none; 
            border-bottom:2px solid black;
        box-shadow: 0px 3px 3px 3px ;
        transition:0.2s;
           }
	
</style>
</head>
<body><center><b><i><div class="contact">
	<h1>Contact Us</h1>
	<div class="pr"><b>We are here to help you in any kind of information and looking forward to serve you better services.<br>We will do our best to get back to you as soon as possible.</b></p>
	<form action=" " method="POST">
		First Name<br><input class="inp2" type="text" name="txt1" required><br>
		Last Name<br><input class="inp2" type="text" name="txt2" required><br>
		Email<br><input class="inp2" type="text" name="txt3" required><br>
		How Can We Help You<br><textarea name="txt4"></textarea></div><br>
		<input id="sub" type="submit" name="Submit">
	</form>
</div></i></b></center><br><?php include("footer.php"); ?></body>
</html>

<?php 
$con=mysqli_connect('localhost','root','','phoenix');
if($con==false)
echo "connection not done";
if(isset($_POST['Submit']))
{
	$firstname=$_POST['txt1'];
	$lastname=$_POST['txt2'];
	$email=$_POST['txt3'];
	$help=$_POST['txt4'];
	$qry="INSERT INTO `us`(`id`, `firstname`, `lastname`, `email`, `help`) VALUES (NULL,'$firstname','$lastname','$email','$help');";
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
		?>
		<script>
		alert("We'll get back to you Soon!!");
		</script>
		<?php 
	}
	else
	{
		?>
		<script>
		alert("Data Not Inserted");
		</script>
		<?php 
	}

}
?>