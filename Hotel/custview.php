
<?php
include("DBcon.php");
?>
<html>
<head>
<title>
</title>
<style>
#bookings{
    margin-top: 100px;
    height:400px;
}
table{
    margin:20px;
    border:1.5px solid black;
    background-image: linear-gradient(145deg,lightsalmon,coral,orangered,red);
    box-shadow: 0px 5px 5px 5px black;
    
}
th,td{
border: 1px solid black;
padding:10px;
text-align:center;
}
</style>
</head>
<body>
<?php include("header.php"); ?>
<center>
<div id="bookings">
<table>

<tr>    
        <!--<th><b><i>BOOKING ID</b></i></th>-->
        <th><b><i>ID</b></i></th>
        <th><b><i>FIRST NAME</b></i></th>
        <th><b><i>LAST NAME</b></i></th>
        <th><b><i>GENDER</b></i></th>
        <th><b><i>EMAIL</b></i></th>
       <th><b><i>MOBILE NO.</b></i></th>
        
        </tr>
<?php 
$query="SELECT * FROM `custreg`";
$result=mysqli_query($con,$query);
    while($row=mysqli_fetch_assoc($result)){
       
        echo "<tr>";
        //echo "<td><a>".$row['booking_id']."</a></td>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['firstname']."</td>";
        echo "<td>".$row['lastname']."</td>";
        echo "<td>".$row['gender']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['mobno']."</td>";
        echo "</tr>";
        
    }


?>
</table>

</div></center>
</body>
<?php include("footer.php"); ?>
</html>