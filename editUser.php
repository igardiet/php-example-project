<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        
        $conn = new mysqli($servername, $username, $password); 
    
        $userId = $_REQUEST["userId"];
        $newValue = $_REQUEST["value"];
    
        $updateUser = "update myGuests set firstname = '$newValue' where id = $userId";
    
        $useDb = "USE myDB";
        $conn->query($useDb);
    
        $conn->query($updateUser);
    
    
        $conn->close();
    



?>