<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/reset-pwd.css">
    <title>Reset Password</title>
</head>
<body>
    <div class="box">
        <h2>Reset Password</h2>

        <form method="post">
            <!--<div class="type">
                <label for="type">Type</label> <br>
                <select name="type">
                    <option value="" disabled selected>Select your type</option>
                    <option value="passenger">Passenger</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="username">
                <label for="username">Username</label> <br>
                <input type="email" name="username" placeholder="Enter your email" maxlength="100">
            </div>-->

            <div class="pwd">
                <label for="pwd">Password</label> <br>
                <input type="password" name="pwd" placeholder="Enter a password" maxlength="8">
            </div>

            <div class="confirm-pwd">
                <label for="confirm-pwd">Confirm password</label> <br>
                <input type="password" name="confirm-pwd" placeholder="Re-enter the password" maxlength="8">
            </div>

            <div class="help">
                <h3>Reminder!</h3>

                <p>Now, this is your new password. Remember it.</p>
            </div>

            <div class="btn">
                <button><span></span>Submit</button>
            </div>
        </form>
    </div>
</body>
</html>