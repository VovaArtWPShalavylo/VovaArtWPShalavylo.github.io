<?php
session_start();

$servername = $_SESSION["servername"];
$username = $_SESSION["DBuser"];
$password = $_SESSION["DBpass"];

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$name = $_POST["DBName"];
$_SESSION["DBname"] = $name;
$sql = "CREATE DATABASE " . $name;
if ($conn->query($sql) === TRUE) {
    echo "Database " . $name . " created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>