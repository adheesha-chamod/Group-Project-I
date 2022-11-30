<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>Log In</title>
</head>
<body>
    <div class="left">
        <h2><a href="./index.php">TapToBus</a></h2>

        <p>TapToBus <br>
            helps to increase the quality and efficiency of the expressway <br>
            transportation system in various ways.</p>
    </div>

    <div class="right">
        <div class="box">
            <h2>Log in</h2>

            <form name="login-form" method="post">
                <div class="type">
                    <label for="type">Type</label> <br>
                    <select name="type">
                        <option value="" disabled selected>Select your type</option>
                        <option value="passenger">Passenger</option>
                        <option value="other">Other</option>
                    </select>
                    <p class="error"><i id="type-error"></i></p>
                </div>

                <div class="username">
                    <label for="username">Username</label> <br>
                    <input type="email" name="username" placeholder="Enter your email" maxlength="100">
                    <p class="error"><i id="username-error"></i></p>
                </div>

                <div class="pwd">
                    <label for="pwd">Password</label> <br>
                    <input type="password" name="pwd" placeholder="Enter your password" maxlength="8">
                    <p class="error"><i id="pwd-error"></i></p>
                    <p class="forgot-pwd-link"><a href="./forgot-pwd.php">Forgot password?</a></p>
                    <!--<div class="link">
                        <p class="help">Need help?</p>
                        <p>or</p>
                        <p class="forgot-pwd"><a href="./forgot-pwd.php">Forgot password?</a></p>
                    </div>-->
                </div>

                <div class="btn">
                    <button><span></span>Log in</button>
                </div>
            </form> 

            <div class="link">
                <p>Don't have an account? <a href="./signup-type.php">Sign up</a></p>
            </div>
        </div>
    </div>
</body>
</html>