<?php
include "connection.php";
$uname=$_POST['uname'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$days=$_POST['day'];
$file=$_POST['file'];
$code=$_POST['code'];

$insertQuery = "INSERT INTO rent (uname, phone, startDate, days,code) VALUES ('$uname', '$phone', '$date','$days','$code')";

    if (mysqli_query($handler, $insertQuery)) {
        echo "Record inserted successfully.";
        header('location:success.php');
    } else {
        echo "Error: ";
    }
    
?>
