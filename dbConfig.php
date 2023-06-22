<?php 
// Database configuration 
$dbHost     = "localhost"; 
$dbUsername = "root"; 
$dbPassword = ""; 
$dbName     = "student_form"; 
 
$db = new mysqli('localhost', 'root', '', 'student_form'); 
 
if ($db->connect_error) 

{ 
    die("Connection failed: " . $db->connect_error); 
}

?>