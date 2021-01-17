<html>
<head>
	<?php include("header.php"); ?>
	<title>Add new Room</title>
</head>
<body>
		<center>
	<div class="room">
	    <h1>Add New Booking</h1>
	    Check In<br>
	    <input id="checkin" type="date" name="CheckIn" required><br><br>
	    Check Out<br>
	    <input id="checko" type="date" name="CheckOut" required><br>
	    Rooms<br>
	    <input id="number" type="number" name="num1" placeholder="Enter No" min="1" max="150" required><br>
	    Adults<br>
	    <input id="number1" type="number" name="num" placeholder="Enter No" min="1" required><br>
	    Kids<br>
	    <input id="number2" type="number" name="num2" placeholder="Enter No" min="1" required><br><br>
	    <input type="submit" name="Proceed">
	</div>
</center>
</form>
<hr>
</body>
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
	$adults=$_POST['num'];
	$kids=$_POST['num2'];
	$qry="INSERT INTO `booking` (`id`, `Checkin`, `Checkout`, `Rooms`, `adults`, `kids`) VALUES (NULL, '$checkin', '$checkout', '$rooms', '$adults', '$kids');";
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
		?>
		<script>
		alert("Data Inserted Successfully");
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