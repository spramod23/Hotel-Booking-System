<?php
include("DBcon.php");
if(isset($_POST['Delete'])){
$id=$_POST['num'];
$qry="DELETE FROM `booking` WHERE `id`='$id'";
$run=mysqli_query($con,$qry);
if($run==false)
{
    ?>
    <script>
    alert("ERROR");
    </script>
    <?php
}else{
    ?>
    <script>
    alert("DATA DELETED");
    </script>
    <?php
    header('location:view.php');
}
}
?>
