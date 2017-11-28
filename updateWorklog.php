<?php
include('Connection.php');

//$id = $_POST['id']; // Autoincrement
$issue = $_POST['issue'];
$date = $_POST['started'];
$time = $_POST['timespent'];

$sql = "update worklog set issue='$issue',started='$date',timespent='$time' where timespent='$time'";

mysqli_query($con,$sql) or
    die ("can't update record");

echo "Successfully updated";
   
mysqli_close($con);
?> 			