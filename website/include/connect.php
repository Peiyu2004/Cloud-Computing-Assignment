<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Use environment variables set in Elastic Beanstalk for security
$host = $_SERVER['RDS_HOSTNAME'];
$user = $_SERVER['RDS_USERNAME'];
$pass = $_SERVER['RDS_PASSWORD'];
$db   = $_SERVER['RDS_DB_NAME'];
$port = $_SERVER['RDS_PORT']; 

// Establish the connection
$con = mysqli_connect($host, $user, $pass, $db, $port);

if (!$con) {
    error_log("Database connection failed: " . mysqli_connect_error());
    die("A technical error occurred. Please try again later.");
}
?>