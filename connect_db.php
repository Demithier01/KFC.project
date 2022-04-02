<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "project_kfc";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $database);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    //echo"Connected successfully";
   
?>