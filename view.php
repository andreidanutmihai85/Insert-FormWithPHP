<?php

// include("auth.php");
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="style3.css" />
</head>
<body>
    
<div class="form">
<p>
    <a href="index.php">Home</a> | 
    <a href="insert.php">Insert New Record</a> | 
    <a href="logout.php">Logout</a>
</p>
<h2>View Records</h2>

<!--===============SUS DOAR HTML======================================================================================-->




<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
    <th><strong>S.N.</strong></th>
    <th><strong>ID</strong></th>
    <th><strong>Data</strong></th>
    <th><strong>Ora</strong></th>
    <th><strong>Nume</strong></th>
    <th><strong>E-mail</strong></th>
    <th><strong>Mesaj</strong></th>
    <th><strong>Serviciu</strong></th>
    <th><strong>Plata</strong></th>
</tr>
</thead>
<tbody>


<?php
$count=1;
$sel_query="Select * from andrei_msg ORDER BY id desc;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>

<tr>

  
      <td><?php echo $count; ?></td>

      <td><?php echo $row['id']??''; ?></td>
      <td><?php echo $row['date_dt']??''; ?></td>
      <td><?php echo $row['event_dt']??''; ?></td>
      <td><?php echo $row['name']??''; ?></td>
      <td><?php echo $row['email']??''; ?></td>
      <td><?php echo $row['message']??''; ?></td>

      <td><?php if( $row['services'] == 1  ){
        echo 'Reparatii Laptop';
        }elseif( $row['services'] == 2) {
        echo 'Reparatii Calculatoare';
        }elseif( $row['services'] == 3 ){
        echo 'Reparatii Monitoare';}?></td>

      <td><?php if( $row['pay'] == 1  ){
        echo 'Numerar';
         }elseif( $row['pay'] == 2) {
         echo 'Revolut';
        }elseif( $row['pay'] == 3 ){
         echo 'ING';}?></td>


    
    <td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
    <td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
</tr>





















<?php $count++; } ?>


</tbody>
</table>

</div>
</body>
</html>