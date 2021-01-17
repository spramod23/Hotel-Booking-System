
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
#del{
               text-decoration:none;
               margin:10px;
               padding:5px;
               font-size:15px;
               font-weight:bold;
               font-style:italic;
               color:black;
               background-color:transparent;
               box-shadow:2px 0px 2px 2px black;
               border:0px;
           }
           #del:hover{
               background-color:transparent;
               text-decoration:none;
               box-shadow: 0px 3px 3px 2px ;
               margin:10px;
               padding:5px;
               font-size:15px;
               color:black;
               border:0px;
               
           }
           #in{
               height:30px;
               
           }
           
</style>
</head>
<body>
<?php include("header.php"); ?>
<center><div id="contd">

<div id="bookings">
<form action="delete.php" method="POST"><input id='del' type='submit' name='Delete' value='DELETE'><input id='in' type='number' name='num' value='UPDATE' min='1'></form>
<table>
<th colspan="8">BOOKINGS</th>
<tr>
        <th><b><i>ID</b></i></th>
        <th><b><i>CHECK IN</b></i></th>
        <th><b><i>CHECK OUT</b></i></th>
       <th><b><i>ROOMS</b></i></th>
        <th><b><i>ADULTS</b></i></th>
        <th><b><i>KIDS</b></i></th>
        </tr>
<?php 
$query="SELECT * FROM booking;";
$result=mysqli_query($con,$query);
$resultc=mysqli_num_rows($result);
if($resultc>0){
    while($row=mysqli_fetch_assoc($result)){
       
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['Checkin']."</td>";
        echo "<td>".$row['Checkout']."</td>";
        echo "<td>".$row['Rooms']."</td>";
        echo "<td>".$row['adults']."</td>";
        echo "<td>".$row['kids']."</td>";
        echo "<td></td>";
        echo "</tr>";
        
    }
    while($row=mysqli_fetch_assoc($result)){
       
        
        
    }
}

?>

</table>

</body>
<?php /*include("footer.php");*/ ?>

</html>
