<?php

require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM andrei_msg WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error($con));
header("Location: view.php"); 
exit();
?>