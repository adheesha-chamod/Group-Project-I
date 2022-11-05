<?php

/* server side validation */

if(empty($_POST["f_name"])){
    die("First name is required");
}

if(empty($_POST["l_name"])){
    die("Last name is required");
}

if(strlen($_POST["nic"]) != 10 && strlen($_POST["nic"]) != 12){
    die("Valid NIC is required");
}

if(strlen($_POST["mobile"]) != 10){
    die("Valid mobile no is required");
}

if(! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    die("Valid email is required");
}

if(strlen($_POST["password"]) != 8){
    die("Password must have 8 characters");
}

if(! preg_match("/[a-z]/i", $_POST["password"])){
    die("Password must contain at least 1 letter");
}

if(! preg_match("/[0-9]/", $_POST["password"])){
    die("Password must contain at least 1 number");
}

if($_POST["password"] !== $_POST["confirm-password"]){
    die("Password must match");
}

// convert password to hash code
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
//var_dump($password_hash);



// import connection
$conn = require __DIR__ . "/../db_connection.php";



/* write to the database */

$sql = "INSERT INTO owner (NIC, f_name, l_name, mobile_no, email, password_hash, type)
        VALUE (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->stmt_init();

// check the sql is correct or not
if(! $stmt->prepare($sql)){
    die("SQL error: " . $conn->error);
}

$type = "owner";

$stmt->bind_param("sssssss",
                    $_POST["nic"],
                    $_POST["f_name"],
                    $_POST["l_name"],
                    $_POST["mobile"],
                    $_POST["email"],
                    $password_hash,
                    $type);

// print_r($_POST);

// check the execution of sql query
if($stmt->execute()){
    echo "Signup successful";
    exit;
}else{
    // NIC, mobile_no or email is dublicating
    die($conn->error . " " . $conn->errno);
    echo "NIC, mobile_no or email is dublicating. Check again";
}