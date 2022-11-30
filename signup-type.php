<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/signup-type.css">
    <title>Sign up</title>
</head>
<body>
    <div class="left">
        <h2><a href="./index.php">TapToBus</a></h2>

        <p>TapToBus <br>
            helps passengers to book seats online on expressway buses & <br>
            helps bus owners to manage their business.</p>
    </div>

    <div class="right">
        <div class="box">
            <h2>Sign up</h2>

            <form action="./process/signup-type.php" method="post" onsubmit="return isSelected()" novalidate>
                <div class="field">
                    <label for="type">Type</label> <br>
                    <select name="type" id="type">
                        <option value="" disabled selected>Select your type</option>
                        <option value="passenger">Passenger</option>
                        <option value="owner">Bus Owner</option>
                    </select>
                    <p class="error"><i id="error"></i></p>
                    <p class="help" >Need help?</p>
                </div>

                <div class="btn">
                    <button><span></span>Next</button>
                </div>
            </form>

            <div class="link">
                <p>Already have an account? <a href="./login.php">Log in</a></p>
            </div>
        </div>
    </div>

    <script src="./js/signup-type.js"></script>
</body>
</html>