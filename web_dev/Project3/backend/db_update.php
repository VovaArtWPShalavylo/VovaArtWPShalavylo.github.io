<?php
session_start();

$servername = $_SESSION["servername"];
$username = $_SESSION["DBuser"];
$password = $_SESSION["DBpass"];
$dbname = $_SESSION["DBname"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id = $_POST["id"];
$firstname = $_POST["firstname"];
$sql = "UPDATE MyGuests SET firstname='{$firstname}' WHERE id='{$id}'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>