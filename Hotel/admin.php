<html>
    <head>
    <title>Admin Dashboard</title>
    </head>
    <?php include("header.php"); ?>
    <style>
    .admin{
		
    }
    .log{
        margin:10px;padding:10px;
        background-image: linear-gradient(145deg,lightsalmon,coral,orangered,red);
        box-shadow: 0px 5px 5px 5px black;
        width:300px;
        height:320px;   
        

           }
           
    .log:before{
        content:'';
        position:absolute;

        background-image: url(img/3.jpg);    
        background-attachment:fixed;
        filter:blur(2px);

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
           h2{
            color:black;
            font-style:italic;
            font-weight:bold;
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
               
               background-color:transparent;
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
              .reg{
               text-decoration:none;
               margin:10px;
               padding:5px;
               font-size:15px;
               font-weight:bold;
               font-style:italic;
               color:black;
               box-shadow:2px 0px 2px 2px black;
           }
           .reg:hover{
               text-decoration:none;
               box-shadow: 0px 3px 3px 2px ;
               margin:10px;
               padding:5px;
               font-size:15px;
               color:black;
               
               
           }
           
    </style>
    <body style="background-image:url(img/4.jpg);background-size:cover;"><center>
    <div class="admin">
		<form action="admin1.php" method="POST">
        <marquee><h1>Welcome to Admin Dashboard</h1></marquee>
        <div class="log">
        <h2>Enter Username</h2>
        <input class="inp" type="text" name="txt1"><br>
        <h2>Enter Password</h2>
        <input class="inp" type="password" name="pwd"><br><br><br>
        <input id="sub" type="submit" name="Login"><br><br>
        <i>You Are Not Admin?</i><br><br><a class="reg"href="adminreg.php">CLICK HERE</a>
        <div>
</form>
        </center>
</div>
    </body><br><br><br>
    <?php include("footer.php"); ?>
</html>
