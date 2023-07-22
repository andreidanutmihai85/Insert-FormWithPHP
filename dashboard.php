<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/
include("auth.php"); //include auth.php file on all secure pages
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome to Dashboard.</p>

<p><a href="index.php">Home</a><p>
<p><a href="insert.php">Insert New Record</a></p>
<p><a href="view.php">View Records</a><p>
<p><a href="logout.php">Logout</a></p>

<br /><br /><br /><br />
<a href="https://www.allphptricks.com/insert-view-edit-and-delete-record-from-database-using-php-and-mysqli/">Tutorial Link</a> <br /><br />
For More Web Development Tutorials Visit: <a href="https://www.allphptricks.com/">AllPHPTricks.com</a>

<p>I spent several hours to create this tutorial, if you want to say thanks so like my pages on <a href="https://www.facebook.com/allphptricks/" target="_blank">Facebook</a> &amp; <a href="https://www.twitter.com/allphptricks/" target="_blank">Twitter</a> and leave your <a href="https://www.facebook.com/pg/allphptricks/reviews/" target="_blank">reviews here on Facebook</a>.</p>

</div>
</body>
</html>