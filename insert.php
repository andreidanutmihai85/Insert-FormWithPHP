<?php
require('db.php');



//include("auth.php"); 



$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['date_dt'];
$age = $_REQUEST['event_dt'];
$submittedby = $_SESSION["username"];

$ins_query="insert into andrei_msg (`trn_date`,`date_dt`,`event_dt`,`submittedby`) values ('$trn_date','$date_dt','$event_dt','$submittedby')";
mysqli_query($conn,$ins_query) or die(mysqli_error($conn));
$status = "New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
}


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
          <link rel="stylesheet" href="style_insert.css">
</head>
<body>

<div>
   
    Contact

</div>





    <form action="process-form.php" method="post">
        
        <label for="date_dt">Selectati data:</label>
        <input type="date"  id="date_dt" name="date_dt">


        <label for="dt">Selectati ora:</label>
        <input type="time"  id="event_dt" name="event_dt" list="time-list">

        <datalist id="time-list" >
            <option value="08:00" datatype="time"></option>
            <option value="08:30" datatype="time"></option>
            <option value="09:00" datatype="time"></option>
            <option value="09:30" datatype="time"></option>
            <option value="10:00" datatype="time"></option>
            <option value="10:30" datatype="time"></option>
            <option value="11:00" datatype="time"></option>
            <option value="11:30" datatype="time"></option>
            <option value="12:00" datatype="time"></option>
            <option value="12:30" datatype="time"></option>
            <option value="13:00" datatype="time"></option>
            <option value="13:30" datatype="time"></option>
            <option value="14:00" datatype="time"></option>
            <option value="14:30" datatype="time"></option>
            <option value="15:00" datatype="time"></option>
            <option value="15:30" datatype="time"></option>
            <option value="16:00" datatype="time"></option>
            <option value="16:30" datatype="time"></option>
            <option value="17:00" datatype="time"></option>
            <option value="17:30" datatype="time"></option>
            <option value="18:00" datatype="time"></option>
            <option value="18:30" datatype="time"></option>
            <option value="19:00" datatype="time"></option>
            <option value="19:30" datatype="time"></option>
            <option value="20:00" datatype="time"></option>
            <option value="20:30" datatype="time"></option>
            <option value="21:00" datatype="time"></option>
            <option value="21:30" datatype="time"></option>
            <option value="22:00" datatype="time"></option>
           

            <!-- <option value="22:30" datatype="time" disabled> -->
           
        </datalist>

        <label for="name">Nume</label>
        <input type="text" id="name" name="name">

        <label for="email">Email</label>
        <input type="text" id="email" name="email">
        
        <label for="message">Mesaj</label>
        <textarea id="message" name="message"></textarea>


        <label for="services">Servicii Oferite:</label>
        <select id="services" name="services">
            <option value="1"selected>Reparatii Laptop</option>
            <option value="2">Reparatii Calculatoare</option>
            <option value="3">Reparatii Monitoare</option>
            <option value="4">Instalare Windows</option>
            <option value="5">Devirusare Laptop</option>
            
        </select>

        <fieldset>
            <legend>Plata</legend>

            <label>
                <input type="radio" name="pay" value="1" checked>
                Numerar
            </label>

            <br>

            <label>
                <input type="radio" name="pay" value="2">
                Revolut
            </label>

            <br>

            <label>
                <input type="radio" name="pay" value="2">
                ING
            </label>

        </fieldset>

        <label>
            <input type="checkbox" name="terms">
            I agree to the terms and conditions
        </label>

        <br>

        <button class="button-1">Send</button>
    
        

    </form>











</body>
</html>