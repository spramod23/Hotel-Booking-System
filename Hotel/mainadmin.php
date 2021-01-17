<html>
    <head>
        <?php include("header.php"); ?>
        <title>Admin Dashboard</title>
    </head>
    <style>
        .buttons{
            text-decoration:none;
            color:black;
            padding:10px;
            box-shadow:1px 1px 1px 1px black;
            background-color:lightsalmon;
            font-size:20px;
        }
        .buttons:hover{
            padding:10px;
            box-shadow:1px 1px 1px 1px black;
            background-color:coral;
            font-size:20px;
        }
        #vw{
            height:300px;
        }
        #sec{
                justify-content:center;
        }


        </style>
    <h1 align="center"><b><i><marquee>Welcome to Admin Dashboard</marquee></i></b></h1>
    <body><div><center>
                <div id="vw">
                <section id="sec">
                <a class="buttons"href="view.php" style="width:200px;">View booking</a><br><br><br>
                <a class="buttons"href="custview.php" style="width:200px;">Registered Customer</a><br><br><br>
                
                </section>
                </div>
                </center>
               </div><br><br><br><br><br><br><?php include("footer.php"); ?> 
    </body>
    
</html>