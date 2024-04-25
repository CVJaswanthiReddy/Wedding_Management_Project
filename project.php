<?php
/*$conn=mysqli_connect("localhost","root","","project");
if($conn)
{
   echo "connection successful";
}
else{
    echo "connection failed";
}
//$query="CREATE DATABASE `project`";
//$query1="CREATE TABLE `ORDER`(`NAME` CHAR(20),`EMAIL` CHAR(20),`PHONENUMBER` CHAR(20),`ADDRESS` CHAR(50),`PINCODE` CHAR(6),`PLAN` CHAR(20))";
mysqli_query($conn,$query1);
?>*/
    $conn=mysqli_connect('localhost','root','','project');
    $query="INSERT INTO `ORDER` VALUES(?,?,?,?,?,?)";
    $stmt=mysqli_prepare($conn,$query);
    mysqli_stmt_bind_param($stmt,'ssssss',$name,$email,$phone,$address,$pincode,$plan);
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $pincode=$_POST['pincode'];
    $plan=$_POST['plan'];
    mysqli_stmt_execute($stmt);
?>
<html>
<body>
<center style="color:blue;padding: top 10px;" >
<?php 
session_start();
$_SESSION["name"]=$_POST['name'];
$_SESSION["thank"]="Thank You!";
echo $_SESSION["name"]." " ."THANKS FOR REGISTERING";
?>
<br>
<img src="success.gif">
<a href="home1.php" class="btn btn-dark">Back to Home</a>
</center>
</body>
</html>

