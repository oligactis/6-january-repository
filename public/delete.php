<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="hospitalmanagement";
$con = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($con->connect_error){
    die("connection failed");
}
$delete=$_GET['name'];
$query="delete from appointment where Name='$delete'";  
$con->query($query);
header("location: /final/hospitalmanagemant/public/appointment.php");
?>