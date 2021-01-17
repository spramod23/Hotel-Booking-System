<html>
    <head>
        <?php include("header.php"); ?>
        <title>About Us</title>
        <link rel="stylesheet" type="text/css" href="aboutus.css" >
    </head>
<style>
section .box{
    margin-top:50;
    background-image: linear-gradient(145deg,lightsalmon,coral,orangered,red);
        box-shadow: 0px 5px 5px 10px black;
    padding:10px;
    width:500px;
    
 }

 #slider{
	width: 45%;
	height: 400px;
	position: absolute;
    top: 70px;
	left: 50%;
    bottom: 15px;
	background: url(img/room.jpg);
	background-size: cover;
	margin: 100px auto;
	box-shadow: 1px 2px 10px 5px black;
	animation: slider 15s infinite linear;
}
@keyframes slider{
		20%{
			background: url(img/enter.jpg);
			background-size: cover;
		}
		50%{
			background: url(img/res.jpg);
			background-size: cover;
		}
		75%{
			background: url(img/pool.jpg);
			background-size: cover;
		}
    }
   section .box:before{
        content: '';
        position:absolute;
        background-color:#000;
        width:500px;
        filter:blur(5px);
        
    }

  </style>
  <body>
    <div class="main">
    <section ><div class="box">
<i><h1>About Us</h1></i>
    
    <p align="left"><b><i>We have 150 comfortably equipped rooms, including two suites:<br>The President suite and the Ambassador suite, with over one hundred metres of surface area,<br> which are sure to awe even the most demanding Guests. We offer 7 rooms, where we have<br> been preparing family and business meetings already for many years.<br> 
        The Phoenix Hotel is not merely the building but, above all, its people. We are a team professionals, <br>who can organise every event end to end.<br>
        We have many years of experience, extensive conference facilities, as well as technical and catering<br> equipment, and we will be more than happy to organise your meeting - both in our building, in a tent <br>at the hotel's patio, as well as in any other place of your choosing.
    </i></b></p><i><h1>We Organise</h1></i>
    <ol><b><i>
        <li>Wedding receptions</li>
        <li>Business Meetings</li>
        <li>Conferences</li>
        <li>Prom</li>
        <li>Business Breakfasts</li>
        <li>Company Anniversary Parties</li>
        <li>Birthday Parties and many more.</li></i></b>
    </ol></div></section>
    
    <div id="slider">
    </div> 
    </div>
    <br><br><?php include("footer.php"); ?>    
</body>

</html>