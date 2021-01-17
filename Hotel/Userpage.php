<html>
<head>
<?php include("header.php"); ?>
<title>CUSTOMER</title>
</head>
<style>
	.bg{

	}
	.slider{
	width: 60%;
	height: 400px;
	position: absolute;
	right: 10%;
	top:10%;
	background: url(img/room.jpg);
	background-size: cover;
	margin:100px auto;
	box-shadow: 1px 2px 10px 5px black;
	animation: slider 15s infinite linear;
}


@keyframes slider{
		0%{
			background: url(img/enter.jpg);
			background-size: cover;
		}
		30%{
			background: url(img/res.jpg);
			background-size: cover;
		}
		75%{
			background: url(img/pool.jpg);
			background-size: cover;
		}
    }
	
	h2{
		font-size:25px;
	}
	
	.ser, .LB{
		font-size:20px;
		text-decoration:none;
		color:black;
		font-weight:bold;
		font-style:italic;
			padding:10px;
		width:10px;
	}
	.ser:hover,.LB:hover{
		font-size:20px;
		text-decoration:none;
		color:black;
		background-color:;
		box-shadow:2px 0px 2px 2px black;
		padding:10px;
		width:10px;
		transition:0.2s;
		width:300px;
	}
    .con23{
		justify-content:center;
	 padding:20px;
	 background-image: linear-gradient(145deg,lightsalmon,coral,orangered,red);
	 width:300px;
	 height:350px;
	 box-shadow: 5px 10px 10px 10px black;
	}
	.but{
		
	}
	</style>

<body><div class="bg">
        <marquee><h2>Welcome to Hotel Phoenix.</h2></marquee>
            <div class="con23">
            <div class="but">
            <label class="LB1"><a class="ser" href="bookmystay.php">BOOK MY STAY</a></label><br><br><br><br>
			<!--<label class="LB"><a class="ser" href="entno.php">RECENT BOOKINGS</a></label><br><br><br><br>-->
            <label class="LB1" ><a class="ser" href="service.php">HOTEL SERIVICES</a></label><br><br><br><br>
			<label class="LB" >ROOM CATEGORY</label><br><br><br><br>
            <label class="LB" >CONTACT HOTEL</label><br><br>
            </div>
            </div>
            <div class="slider">
        </div>
    </div><br><br><br>
	<?php include("footer.php"); ?></body>	
</html>