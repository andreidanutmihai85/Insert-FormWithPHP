<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>
<p><a href="dashboard.php">Dashboard</a></p>
<a href="logout.php">Logout</a>

<br /><br /><br /><br />
<a href="https://www.allphptricks.com/insert-view-edit-and-delete-record-from-database-using-php-and-mysqli/">Tutorial Link</a> <br /><br />
For More Web Development Tutorials Visit: <a href="https://www.allphptricks.com/">AllPHPTricks.com</a>

<p>I spent several hours to create this tutorial, if you want to say thanks so like my pages on <a href="https://www.facebook.com/allphptricks/" target="_blank">Facebook</a> &amp; <a href="https://www.twitter.com/allphptricks/" target="_blank">Twitter</a> and leave your <a href="https://www.facebook.com/pg/allphptricks/reviews/" target="_blank">reviews here on Facebook</a>.</p>

</div>
</body>
</html>