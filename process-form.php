<?php

$name = $_POST["name"]; 
$date_dt = $_POST["date_dt"];
$event_dt = $_POST["event_dt"];
$message = $_POST["email"];
$email = $_POST["message"];
$services = filter_input(INPUT_POST, "services", FILTER_VALIDATE_INT);
$pay = filter_input(INPUT_POST, "pay", FILTER_VALIDATE_INT);
$terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOL);
//---------------------------------------------------------------------------------  
if ( ! $terms) {
    die("Terms must be accepted"); 
}   
//---------------------------------------------------------------------------------  
require('db.php');


$query = "SELECT date_dt from andrei_msg where date_dt='".$date_dt."'";
$query2 = "SELECT event_dt from andrei_msg where event_dt='".$event_dt."'";

$result = mysqli_query($conn, $query) or die ( mysqli_error($conn));
$result2 = mysqli_query($conn, $query2) or die ( mysqli_error($conn));

$row = mysqli_fetch_assoc($result);
$row2 = mysqli_fetch_assoc($result2);




// if($row > 0 ){

// if($row2 > 0){
// echo "Nu se pot face inregistrari la aceasta data/ora!";
//     return false;
//  }
// {else($row < 0 || $row > 0 && $row2 < 0 ){


//  }
    


if ($row > 0){


    
        echo "Nu se pot face inregistrari la aceasta data!";
            return false;
        
 
}elseif( $row || $row2 < 0 ) {
{

    
    }}



// $query = "SELECT event_dt from andrei_msg where event_dt='".$event_dt."'";

// $result = mysqli_query($conn, $query) or die ( mysqli_error($conn));
// $row = mysqli_fetch_assoc($result);

// if($row > 0){
//     echo "Ora folosita!";
//     return false;
    
// };








//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// var_dump($name, $email, $message,  $services, $pay, $terms); 

// >>>>> asta daca comentezi tot de dedesubt si lasi linia asta necomentata, atunci o sa iti afiseze rezultatul in browser
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

$host = "localhost:3307"; 
$dbname = "message_db";
$username = "root";
$password = "";
        
$conn = mysqli_connect(hostname: $host,
                       username: $username,
                       password: $password,
                       database: $dbname);
//   //------------------------------------------------------------------------------- 
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}       
//--------------------------------------------------------------------------------  

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//  echo "Connection Successful!";

// >>>>> asta daca comentezi tot de dedesubt si ramane doar linia asta necomentata, o sa iti arate in browser "Connection Successful!"
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

        
$sql = "INSERT INTO andrei_msg (date_dt, event_dt, name, email, message, services, pay)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sssssii",
                       $date_dt,
                       $event_dt,
                       $name,
                       $email,
                       $message,
                       $services,
                       $pay);

mysqli_stmt_execute($stmt);

echo "Record saved.";
