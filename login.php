<?php

$is_invalid = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $conn = require __DIR__ . "/db_connection.php";

    $type = $_POST["type"];

    if($type === "passenger"){
        $sql = sprintf("SELECT * FROM passenger
                        WHERE email = '%s'",
                        $conn->real_escape_string($_POST["username"]));
    }elseif($type === "owner"){
        $sql = sprintf("SELECT * FROM owner
                        WHERE email = '%s'",
                        $conn->real_escape_string($_POST["username"]));
    }
    // other users must include

    $result = $conn->query($sql);

    $user = $result->fetch_assoc();

    if($user){
        if(password_verify($_POST["password"], $user["password_hash"])){
            session_start();

            session_regenerate_id();

            $_SESSION["user_id"] = $user["NIC"];

            //echo "Successfully logged in";
            if($type == "passenger"){
                header("Location: Passenger/home.php");
            }elseif($type == "owner"){
                header("Location: Owner/home.php");
            }

            exit;
        }
    }else{
        echo "User doesn't exist";

        exit;
    }

    $is_invalid = true;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <h1>Log In</h1>

    <?php if($is_invalid): ?>
        <em>Invalid password</em>
    <?php endif; ?>

    <form method="POST">
        <label for="type">Type</label> <br>
        <input type="text" name="type" id="type" value="<?= htmlspecialchars($_POST["type"] ?? "") ?>" required> <br>
        
        <label for="username">Username</label> <br>
        <input type="email" name="username" id="username" value="<?= htmlspecialchars($_POST["username"] ?? "") ?>" required> <br>

        <label for="password">Password</label> <br>
        <input type="password" name="password" id="password" required> <br>

        <p><a href="./forgot-password.html">Forgot password?</a></p>

        <button>Login</button>

        <p>Don't have an account? <a href="./sign-up-type.html">Sign up</a></p>
    </form>
</body>
</html>