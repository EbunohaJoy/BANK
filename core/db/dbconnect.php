<?php
// Create connection
$conn = new mysqli(HOST,USERNAME,PASSWORD,DBNAME);

// Check connection
if ($conn->connect_error) {
    die("Error in connection: " . $conn->connect_error);
}