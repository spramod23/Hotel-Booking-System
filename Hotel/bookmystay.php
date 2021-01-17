<html>
<head>
	<?php include("header.php"); ?>
	<link rel="stylesheet" type="text/css" href="bookmystay.css">
	<title>Book My Stay</title>
</head>
<style>
	.room{
		width:300px;
		margin: 10px;
		padding: 10px;
		margin-top:100px;
		color: #000;
		overflow: hidden;
		background-image: linear-gradient(145deg,lightsalmon,coral,orangered,red);
        box-shadow: 0px 5px 5px 5px black;
	}
	.cont h1{font-size:30px;
	
	}
	#cat{
		background:transparent;
		border-style:none;
		border-bottom:2px solid black;

	}
	option{
		font-style:italic;
		font-weight:bold;
	}
	.room input[type=submit]{

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
				 .inp{
            background-color:transparent;
            border-style: none; 
            border-bottom:2px solid black;
           }
           .inp:hover{
            background-color:transparent;
            border-style: none; 
            border-bottom:2px solid black;
        box-shadow: 0px 3px 3px 3px ;
        transition:0.2s;
           }
		   option{
			   color:black;
			   font-weight:bold;
			   font-style:italic;
		   }
		   option:visited{
			   color:black;
			   font-weight:bold;
			   font-style:italic;
		   }
	</style>

<body><center>
<div class="room">
	<form action=" " method="POST">
	<div class="cont">
	    <h1><i><b>Book My Stay</i></b></h1>
	    <i><b>Check In</i></b><br>
	    <input class="inp" type="date" name="CheckIn" required><br><br>
	    <i><b>Check Out</i></b><br>
	    <input class="inp" type="date" name="CheckOut" required><br>
	    <i><b>Rooms</i></b><br>
	    <input class="inp" type="number" name="num1" min="1" max="150" required><br><br>
		<i><b>Room Category</i></b><br>
		<select name="cat" class="inp" >
		<option selected hidden>Select</option>
		<option >Non-AC</option>
		<option  >AC</option>	
		<option  >Premium</option>	
		<option  >Deluxe</option>
		</select>
		<br><i><b>Adults</i></b><br>
	    <input class="inp" type="number" name="num"  min="1" required style="width:80px;"><br>
	    <i><b>Kids</i></b><br>
	    <input class="inp" type="number" name="num2"  min="1" required style="width:80px;"><br><br>
	    <input id="sub" type="submit" name="Proceed"></div>
</form>
</div></center>
</body><br><br><?php include("footer.php"); ?>
</html>


<?php 
$con=mysqli_connect('localhost','root','','phoenix');
if($con==false)
echo "connection not done";
if(isset($_POST['Proceed']))
{
	$checkin=$_POST['CheckIn'];
	$checkout=$_POST['CheckOut'];
	$rooms=$_POST['num1'];
	$roomcat=$_POST['cat'];
	$adults=$_POST['num'];
	$kids=$_POST['num2'];
	$qry="INSERT INTO `booking`(`id`, `Checkin`, `Checkout`, `Rooms`, `Roomcat`, `adults`, `kids`) VALUES (NULL,'$checkin','$checkout','$rooms','$roomcat','$adults','$kids');";
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
		?>
		<script>
		alert("We'll get back to you soon with your confirmed booking.");
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
