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

$sql = "SELECT * FROM MyGuests WHERE firstname='{$_POST["firstname"]}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Information about user " . $_POST["firstname"];
	echo "<table><tr><th>ID</th><th>Last name</th><th>E-mail</th><th>Reg date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td><td>".$row["reg_date"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>