<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    
    $conn = new mysqli($servername, $username, $password); 

    $userId = $_REQUEST["userId"];

    $deleteUser = "delete from myGuests where id = $userId";

    $useDb = "USE myDB";
    $conn->query($useDb);

    $conn->query($deleteUser);


    $conn->close();




?>