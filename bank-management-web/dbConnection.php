<?php
//Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "Malith0aa";
$dbName     = "bank_management";

// // Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// // Check connection
if ($db->connect_error) {
     die("Connection failed: " . $db->connect_error);
}
