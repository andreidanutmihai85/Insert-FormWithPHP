<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/
session_start();
if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
}
?>