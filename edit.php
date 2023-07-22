<?php
require('db.php');

$id=$_REQUEST['id'];
$query = "SELECT * from andrei_msg where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error($conn));
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">


<h1>Update Record</h1>
<?php



$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
// $id =$_REQUEST['id'];

// $name =$_REQUEST['name'];
// $update="update andrei_msg set name='".$name."' where id='".$id."'";

//========================================================================

$name =$_REQUEST['name'];
$email =$_REQUEST['email'];




$update="update andrei_msg set name='".$name."', email='".$email."' where id='".$id."'";





//========================================================================












mysqli_query($conn, $update) or die(mysqli_error($conn));

$status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
echo '<p style="color:#00ff00;">'.$status.'</p>';
}else {
?>

<div>
<form name="form" method="post" action=""> 

<input type="hidden" name="new" value="1" />
<p>
    <input type="text" name="name" placeholder="Name"  value="<?php echo $row['name'];?>" for="name"> Name
</p>

<input type="hidden" name="new" value="1" />
<p>
    <input type="text" name="email" placeholder="E-mail"  value="<?php echo $row['email'];?>" for="name"> E-mail
</p>






<p><input name="submit" type="submit" value="Update" /></p>













</form>
<?php } ?>

</div>
</div>
</body>
</html>

