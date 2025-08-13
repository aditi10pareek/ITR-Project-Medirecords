<?php

$servername = "sql204.infinityfree.com";  
$username   = "if0_39681829";               
$password   = "BI67CbVtkC01";             
$dbname     = "if0_39681829_hospital_db";        
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>