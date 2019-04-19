<?php
	session_start();
?>
<html >
<body >
Demo connection to DataBase using MySQLi in procedural style: <br >
<?php
$servername = $_POST [ "DB" ]; // localhost by default
$username = $_POST [ "DBuser" ];
$password = $_POST [ "DBpass" ];
$_SESSION["DBuser"] = $username;
$_SESSION["DBpass"] = $password;
$_SESSION["servername"] = $servername;
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) { // Check connection
die( "Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully" ;
?>
</body >
</html >