<?php 
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password); 

$getUsers = "SELECT * FROM myGuests";

$useDb = "USE myDB";
$conn->query($useDb);

$result = $conn->query($getUsers);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["email"]. " ". $row["password"] .  "<button onclick='deleteUser(event)' userId=".$row['id'].">delete</button><button onclick='editUser(event)' userId=".$row['id'].">edit</button> <br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>