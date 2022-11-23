<?php

session_start();

if (isset($_SESSION['username'])) {
    header("Location:../Home/home.php");
}

include 'dbh.inc.php';

if (isset($_POST["submit"])) {

    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $sql = "SELECT staff_no, password_hash FROM staffmember WHERE email = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result) {

        $row = mysqli_fetch_assoc($result);

        $hash = $row['password_hash'];

        if (password_verify($password, $hash)) {


            $_SESSION['username'] = $username;

            // ===================================================


            $_SESSION['staff_no'] = $row['staff_no'];
            // =============================================

            header("Location:../Home/home.php");
        } else {


            header("Location:staffmemberLogin.php?state=invalid_credentials");
        }
    } else {

        header("Location:staffmemberLogin.php?state=invalid_credentials");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--character encoding type-->
    <meta charset="UTF-8">
    <!--use when using svg(Scalable Vector Graphics (SVG) is a web-friendly vector file format) file-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--the width of the webpage keep always fit-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <script src="https://kit.fontawesome.com/dba7721b1f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="staffmemberLogin.css">
</head>

<script>
    setTimeout(() => {
        document.querySelector(".msg").style.display = 'none';
    }, 2000)
</script>

<body>

    <div class="header">


        <?php
        if (isset($_GET['state'])) {
            if ($_GET['state'] == 'invalid_credentials') {
        ?>
                <div class='msg slide-in-fwd-center'>Invalid username or password</div>
        <?php
            }
        }
        ?>



        <?php

        // if (isset($_GET['error'])) {
        ?>
        <!-- <div class='msg'><?php echo $_GET['error'] ?></div> -->
        <?php
        // }

        ?>


        <?php

        // ========================
        // echo isset($_SESSION['errorMsg']) ? $_SESSION['errorMsg'] : '';
        // ==========================
        ?>



    </div>

    <div class="main_container">
        <!-- <div class="home_icon">
            <a href="#" ><i class="fa fa-home"></i></a>
        </div> -->
        <div class="backgroundPic">
            <img src="../images/TapToBus.png" alt="" srcset="">
        </div>
        <div class="form">
            <h1>Log In</h1>
            <h6>welcome back!</h6>

            <form action="staffmemberLogin.php" method="post">
                <!-- when the from is submited this is where the data will send -->
                <div class="form_control">
                    <label for="name">User name</label>
                    <div class="form-input">
                        <span class="icon"><i class="fa-solid fa-user" aria-hidden="true"></i></span>
                        <input class="input_box" type="text" id="username" name="username">
                    </div>
                </div>

                <div class="form_control">
                    <label for="password">Password</label>
                    <div class="form-input">
                        <span class="icon"><i class="fa-sharp fa-solid fa-key"></i></span>
                        <input class="input_box" type="password" id="password" name="password">
                    </div>
                </div>

                <div class="forgetPw">
                    <a href="#"> Forgot password?</a>
                </div>
                <div class="btn_control">
                    <input type="submit" class="btn" name="submit" value="Sign In" />
                </div>
            </form>
        </div>
    </div>
</body>

</html>