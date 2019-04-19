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
$date = date("Y-m-d H:i:s");
$sql = "INSERT INTO MyGuests (firstname, lastname, email, reg_date)
VALUES ('{$_POST["firstname"]}', '{$_POST["lastname"]}', '{$_POST["email"]}', '{$date}')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>