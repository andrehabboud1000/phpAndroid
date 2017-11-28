<?php
include('Connection.php');

//$id = $_POST['id']; // Autoincrement
$issue = $_POST['issue'];
$date = $_POST['started'];
$time = $_POST['timespent'];



$sql = "insert into worklog (issue,started,timespent) values ('$issue','$date','$time')";
mysqli_query($con,$sql) or
    die ("can't add record");

echo "Record Added";
   
mysqli_close($con);
?> 			