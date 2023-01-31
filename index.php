<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js" defer></script>
    <title>PHP TEST</title>
</head>
<body>
<?php 
require_once('server.php');
require_once('getUsers.php');
?>
        <label>User: <input type="text" name="user" id="user"><br><br></label>
        <label>Email: <input type="text" name="email" id="email"><br><br></label>
        <label>Password: <input type="password" name="pass" id="pass"><br></label>
        <button type="submit" id="submit">Submit</button>
    
</body>
</html>