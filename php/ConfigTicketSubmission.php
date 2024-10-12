<?php
//The connection object
$con=new mysqli("localhost","root","","help_desk");
// Check connection
if($con->connect_error){
die("Connection failed: " . $con->connect_error);
}
?>

