<?php

// start session
session_start();

// get the name of the logged in user
if(isset($_SESSION["user_id"])){
    $conn = require __DIR__ . "/../db_connection.php";

    $sql = "SELECT * FROM passenger
            WHERE NIC = {$_SESSION["user_id"]}";

    $result = $conn->query($sql);

    $user = $result->fetch_assoc();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    
    <!-- display user -->
    <?php if(isset($user)): ?>
        <p>Hello <?= htmlspecialchars($user["f_name"]) ?></p>
        
        <p><a href="../logout.php">Logout</a></p>
    <?php else: ?>
        <p><a href="../sign-up-type.html">Sign up</a></p>
    <?php endif; ?>
</body>
</html>