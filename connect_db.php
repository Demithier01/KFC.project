<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "kfc";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $database);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    //echo"Connected successfully";
   
?>
<h1> KFC </h1>