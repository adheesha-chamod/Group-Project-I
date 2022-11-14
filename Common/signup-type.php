<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $type = $_POST["type"];

    if($type == "passenger"){
        //echo "Passenger";
        header("Location: ../Passenger/signup-form.html");
    }elseif($type == "owner"){
        //echo "Owner";
        //header("Location: Owner/sign-up-form.html");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../Style/common.css">
    <link rel="stylesheet" href="../Style/signup-type.css">
</head>
<body>
    <div class="box">
        <h1>Sign up as</h1>

        <form method="post">
            <label for="type">Type</label> <br>
            <select name="type" id="type" required>
                <option value="" disabled selected>Select type</option>
                <option value="passenger">Passenger</option>
                <option value="owner">Bus Owner</option>
            </select>

            <br>

            <button type="submit"><span></span>Next</button>

            <p>Already have an account? <a href="#">Log in</a></p>
        </form>
    </div>
</body>
</html>