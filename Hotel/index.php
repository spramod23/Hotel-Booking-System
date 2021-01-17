<html>
<head>
<?php include("header.php"); ?>
<title>Home</title>
</head>
<style>
	.bg{

	}
	.slider{
	width: 40%;
	height: 430px;
	position: absolute;
	right: 57%;
	background: url(img/room.jpg);
	background-size: cover;
	margin:74px auto;
	box-shadow: 1px 2px 10px 5px black;
	animation: slider 15s infinite linear;
}
.con{
	font-family: lucida;
	height: 500px;
}
.cont{
	position: absolute;
	left: 45%;
	font-family: lucida;
	font-size:20px;
	font-weight:bold;
	font-style: italic;
	background-image: linear-gradient(145deg,gold,coral,orangered,gold);
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
	.cont{
		height:410px;
		width:750px;
		padding:10px;
		background-color:rgba(97,141,243,0.4);
        box-shadow: 0px 5px 10px 5px ;

	}
	h2{
		font-size:25px;
	}
	.cont:before{
		content:'';
		
	}
	</style>

<body><div class="bg">
</div>
<div class="slider">
</div>
<div class="con">	
<marquee><h2>Welcome to Hotel Phoenix.</h2></marquee>
		<div class="cont">
		<p align="left"><b>Hotel Phoenix offer guests an extraordinary place that is created by combining unique architecture,<br> expressive decor and local features all in one great location.
		<br>Hotel Phoenix is a leader in hospitality industry, with a distinctive collection and an extensive reputation for excellence.<br>
		We are proud to own and manage a 4-Star luxury hotel established in 2020.<br><br>
		Hotel housed  150 rooms and suites.<br>
		Hotel also housed conference rooms, gym, and game rooms. There are 2 in house restaurants serving chinese and western cuisine, a lobby bar and executive lounge.<br>
		All areas are Wi-Fi enabled. All rooms and suites are furnished for maximum comfort and full convenience for the conduct of business.<br><br>
		Hotel Phoenix is centrally located in the heart of Pune's automobile and industrial belt.
		Leisure visitors will enjoy the multiple entertainment and shopping districs nearby. Popular tourist attractions such as Lonavala, Khandala and Lavasa are a 45-minute drive from this hotel.

	</p></div>
</div><br><br><br><br><br><br>
<?php include("footer.php"); ?>
</body>

</html>
	