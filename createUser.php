<?php 
// require_once('server.php');
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password); 

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];


$insertData = "INSERT INTO MyGuests (firstname, email, password) values ('$name', '$email', '$pass')";

$useDb = "USE myDB";
$conn->query($useDb);

$conn->query($insertData);

$conn->close();

echo json_encode([
    "name"=> $name,
    "email"=> $email,
    "pass"=> $pass
]);

?>