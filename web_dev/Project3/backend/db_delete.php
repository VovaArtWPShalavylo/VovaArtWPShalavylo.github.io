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

// sql to delete a record
$id = $_POST["id"];
$sql = "DELETE FROM MyGuests WHERE id='{$id}'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>