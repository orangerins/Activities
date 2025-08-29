<?php 
$host = "loocalhost";
$username = "root";
$password = " ";
$database = "student_attendance";

$mysqli= new $mysqli($host,$username,$password,$database);

if($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
echo "Connected successfully";
?>