<?php 
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password); 

$getUsers = "SELECT * FROM myGuests";

$useDb = "USE myDB";
$conn->query($useDb);

$response = $conn->query($getUsers);

echo "<pre>";
var_dump($response);
echo "</pre>";

$conn->close();
?>