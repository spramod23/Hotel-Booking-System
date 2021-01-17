<html>
    <head>
        <?php include("header.php"); ?>
        <title>
            ADMIN REGISTRATION
        </title>
        <link rel="stylesheet" type="text/css" href="contactdetails.css">
    </head>
    <style>
    #cd1{
        margin-top:60px;
    }
    .cd{
        width:400px;
        overflow:hidden;
        background-image: linear-gradient(145deg,lightsalmon,coral,orangered,red);
        /*background-color: rgba(0,0,0,0.0);*/
		box-shadow: 0px 5px 5px 5px black;
    }
	.cd:hover{
        width:400px;
        background-color:rgba(97,141,243,0.4);
        /*box-shadow: 0px 5px 5px 10px ;*/
        transition:0.2s;
    }
    label{
        font-weight:bold;
        font-style:italic;
        font-size:20px;
    }
    .inp{
        
		border-style:none;
		background-color:transparent;
		border-bottom: 2px solid black;
    }
    .inp:hover{
        
		border-style:none;
        background-color:coral;
		/*background-color:transparent;*/
		border-bottom: 2px solid black;
        box-shadow: 0px 3px 3px 3px ;
        transition:0.2s;

    }
    .sub3{
            width:80px;
            background:transparent;
            border:none;
            font-size:20px;
            font-weight:bold;
        font-style:italic;
        box-shadow:2px 0px 2px 2px black;   

    }
    .sub3:hover{
            width:80px;
            background:transparent;
            border:none;
            font-size:20px;
            font-weight:bold;
        font-style:italic;
        background-color:coral;
        box-shadow: 0px 3px 3px 3px ;
        transition:0.2s;
    }
	</style>
    <body>
    <div id="cd1">
        <center>
        <div class="cd">
        <h1>Admin Registration</h1>
            <form action="" method="post">
                   <label> First Name</label><br><input class="inp" type="text" name="txt1" required><br><br>
                   <label>Last Name</label><br><input class="inp" type="text" name="txt2" required><br><br>
                   <label>Gender</label><br>
                   <input class="inp4" type="radio" name="gender" value="M" required><b><i>Male</i></b><br>
                   <input class="inp4" type="radio" name="gender" value="F" required><b><i>Female</i></b><br><br>
                   <label>Email</label><br><input class="inp" type="email" name="txt3" required><br><br>
                   <label> Mobile No.</label><br><input class="inp" type="text" name="txt4" required><br><br>
                   <label> Registration Key</label><br><input class="inp" type="text" name="txt0" required><br><br>
                   <label> Admin Designation:</label><br><input class="inp" type="text" name="desg" required><br><br>
                   <label>Create Password</label><br><input class="inp" type="password" name="txt5" required><br><br>
                   <label>Confirm Password</label><br><input class="inp" type="password" name="txt6" required><br><br>
                   <input class="sub3" type="submit" name="Submit"><br><br>
            </form>

        </div>
</center></div>
    </body><br><br><br><br>
    <?php include("footer.php"); ?>
</html>

<?php 
$con=mysqli_connect('localhost','root','','phoenix');
if($con==false)
echo "connection not done";
if(isset($_POST['Submit']))
{
	$firstname=$_POST['txt1'];
    $lastname=$_POST['txt2'];
    $gender=$_POST['gender'];
	$email=$_POST['txt3'];
    $mobile=$_POST['txt4'];
    $regkey=$_POST['txt0'];
    $desg=$_POST['desg'];
    $password=$_POST['txt5'];
    $cpassword=$_POST['txt6'];
    $qry="INSERT INTO `adminreg`(`id`, `firstname`, `lastname`, `gender`, `email`, `mobno`, `regkey`, `desg`, `pass`, `cpass`) VALUES
     (NULL,'$firstname','$lastname','$gender','$email','$mobile','$regkey','$desg','$password','$cpassword')";
    $run=mysqli_query($con,$qry);
    if($run==true)
    {
    
	    if($password==$cpassword)
	    {
		    
            if($regkey==89891212){
                ?>
                <script>
                alert("REGISTRATION IS DONE!!!");
                </script>
                <?php 
                header("location:admin.php");
            }
            else{
                ?>
		    <script>
		    alert("REGISTRATION KEY FAILED");
		    </script>
            <?php 
            }
	    }
	    else
	    {
		    ?>
		    <script>
		    alert("Password Does Not Match");
		    </script>
		    <?php 
        }
    }
        
}
?>