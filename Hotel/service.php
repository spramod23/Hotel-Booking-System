<html>
    <head>
        <?php include("header.php") ?>
        <title>
            Services
        </title>
        <style>

            .slider{
	width: 50%;
	height: 400px;
	position: absolute;
    top: 60px;
	left: 40%;
    bottom: 15px;
	background: url(img/blue.jpg);
	background-size: cover;
	margin: 120px auto;
	box-shadow: 1px 2px 10px 5px black;
	animation: slider 15s infinite linear;
}

@keyframes slider{
		20%{
			background: url(img/cha.jpg);
			background-size: cover;
		}
		50%{
			background: url(img/meet.jpg);
			background-size: cover;
		}
		75%{
			background: url(img/ser.jpeg);
			background-size: cover;
		}
    }
    h2{
        font-size:30px;
    }
    ol li{
        font-size:18px;
        color:black;
    }
    .cont{
        width:300px;
        background-image: linear-gradient(145deg,lightsalmon,coral,orangered,red);
		box-shadow: 0px 5px 5px 5px black;
    }
    .cont:hover{
        width:300px;
        background-color:rgba(97,141,243,0.4);
        box-shadow: 0px 5px 5px 10px black;
        transition:0.2s;
    }
            </style>

    </head>
    <body><div class="ser">
        
        
        <b><i><h1><marquee>Hotel Facilities and Services</marquee></h1>
        <div class="cont"><h2>Hotel Facilities</h2>
        <ol>
            <li>Swimming Pool</li>
            <li>Car Parking</li>
            <li>24 Hours Security</li>
            <li>Restaurant</li>
            <li>Conference Room</li>
            <li>Purified Water</li>
            <li>AC & Non-AC Rooms</li>
            <li>Public Computers</li>
            <li>Bar</li>
            <li>Massage center</li>
        </ol>
        <h2>Guest Service</h2>
        <ol>
            <li>24 Hours Room Service</li>
            <li>Free Wifi Service</li>
            <li>Laundry Service</li>
            <li>Pick Up & Drop Service</li>
            <li>Medical Service</li>
        </ol></i></b></div>
        <div class="slider">
        </div>
        </div>
        
    </body><br><br><br>
    <?php include("footer.php"); ?>
</html>