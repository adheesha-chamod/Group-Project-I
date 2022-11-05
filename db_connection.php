<?php

$host = "localhost";
$db = "taptobus";
$user = "root";
$password = "";

// create new connection
$conn = new mysqli(hostname: $host,
                    username: $user,
                    password: $password,
                    database: $db);

// check connection
if($conn->connect_errno){
    die("Connection error: " .$conn->connect_error);
}

// return connection
return $conn;