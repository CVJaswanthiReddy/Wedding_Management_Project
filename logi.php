<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['email'];
    $pass = $_POST["pwd"];

    // Replace these with your actual database credentials
    $hostname = "localhost";
    $username_db = "root";
    $password_db = "";
    $database = "car";

    $connection = mysqli_connect($hostname, $username_db, $password_db, $database);

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM register WHERE email =$username AND password=$pass";
    $stmt = mysqli_prepare($connection, $query);
    if($stmt){
        echo "login successfully";
    }else{
        echo "fail";
    }
    
}
   
?>
