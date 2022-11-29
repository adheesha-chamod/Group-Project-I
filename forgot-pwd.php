<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/forgot-pwd.css">
    <title>Forgot Password</title>
</head>
<body>
    <div class="box">
        <h2>Forgot Password</h2>

        <form method="post">
            <div class="type">
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
            </div>

            <div class="help">
                <h3>How to proceed?</h3>

                <p>After clicking submit button, please check your email. 
                    You will receive an email with a link for the password reset function to your registered email. 
                    Click on the provided link. 
                    The link will direct you to the password reset page.</p>
            </div>

            <div class="btn">
                <button><span></span>Submit</button>
            </div>
        </form>

        <div class="link">
            <p>Don't have an account? <a href="./signup-type.php">Sign up</a></p>
        </div>
    </div>
</body>
</html>