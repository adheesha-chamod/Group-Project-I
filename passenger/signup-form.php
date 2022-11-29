<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/passenger/signup-form.css">
    <title>Sign up</title>
</head>
<body>
<div class="left">
        <h2><a href="../index.php">TapToBus</a></h2>

        <p>TapToBus <br>
            provide the easiest and most secure way to book seats <br>
            on expressway buses online.</p>
    </div>

    <div class="right">
        <div class="box">
            <h2>Sign up</h2>

            <form method="post">
                <div class="fname">
                    <label for="fname">First name</label> <br>
                    <input type="text" name="fname" placeholder="Enter your first name" maxlength="25">
                </div>

                <div class="lname">
                    <label for="lname">Last name</label> <br>
                    <input type="text" name="lname" placeholder="Enter your last name" maxlength="25">
                </div>

                <div class="nic">
                    <label for="nic">NIC</label> <br>
                    <input type="text" name="nic" placeholder="Enter your NIC No" maxlength="10">
                    <!--only consider old nic cards-->
                </div>

                <div class="mobile">
                    <label for="mobile">Mobile No</label> <br>
                    <input type="tel" name="mobile" placeholder="Enter your mobile no" maxlength="10">
                </div>

                <div class="email">
                    <label for="email">Email</label> <br>
                    <input type="email" name="email" placeholder="Enter your email" maxlength="100">
                </div>

                <div class="pwd">
                    <label for="pwd">Password</label> <br>
                    <input type="password" name="pwd" placeholder="Enter a password" maxlength="8">
                </div>

                <div class="confirm-pwd">
                    <label for="confirm-pwd">Confirm password</label> <br>
                    <input type="password" name="confirm-pwd" placeholder="Re-enter the password" maxlength="8">
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="checkbox" value="checked">
                    <label for="checkbox">By signing up, I agree to TapToBus's 
                        <a href="../terms-conditions.php">Terms & Conditions</a>.</label>
                </div>

                <div class="btn">
                    <button><span></span>Sign up</button>
                </div>
            </form>

            <div class="link">
                <p>Already have an account? <a href="../login.php">Log in</a></p>
            </div>
        </div>
    </div>
</body>
</html>