<?php

/* ================================================================CODUL ORIGINAL======================
$con = mysqli_connect("localhost:3307","root","","register");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
================================================================CODUL ORIGINAL======================*/





  $hostname = "localhost:3307";
  $username = "root";
  $password = "";
  $database = "message_db";
  
  // Create connection
  $conn = new mysqli($hostname, $username, $password, $database);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // echo "Connected successfully";










?>