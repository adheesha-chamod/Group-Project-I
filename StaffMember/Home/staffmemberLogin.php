<?php 
    session_start();

if(isset($_SESSION['username'])){
    header("Location:home.php");
}

  // $conn = require __DIR__ . './database.php';
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "taptobus";
    
    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
        echo "Connect error";
    }else{
        echo "Connect succefully";
    }
    
    //   return $conn;

    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
       
        $sql = "SELECT * FROM passenger WHERE (email = '$username' && password_hash = '$password')";
        $result = mysqli_query($conn,$sql);
        $count=mysqli_num_rows($result);        
        if($result){
           if($count==1){
                session_start();
                $_SESSION['username'] = $username;
                header('location:home.php');
                echo('loging succesfully');
           // }
        }else{
            $sql1 = "SELECT * FROM passenger WHERE (email= '$username')";
            $result1 = mysqli_query($conn,$sql1);
            $count1=mysqli_num_rows($result1);
            if($count1==1){
                header('location:staffmemberLogin.php?state=invalid_password');
                echo('invalid password');
            }
            else{
               header('location:staffmemberLogin.php?state=invalid_username');
               echo('invalid invalid_username');
                }
            }
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

     <link rel="stylesheet" href="staffmemberLogin.css"> 
</head>

<script>
        setTimeout(()=>{
            document.querySelector(".msg").style.display='none';
        },2000)
</script>

<body>

    <div class="header">
            <?php
            if(isset($_GET['state'])){
                if($_GET['state']=='invalid_password'){
                 ?>   
                        <div class='msg'>Invalid password</div>
                <?php
                   
                }
                else if($_GET['state']=='invalid_username'){
                    ?>
                        <div class='msg'>Invalid username</div>
                    <?php
                }
            }
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
                    <input class="input_box" type="text" id="username" name="username">
                </div>
                <div class="form_control">
                    <label for="password">Password</label>
                    <input class="input_box" type="password" id="password" name="password">
                </div> 
                <div class="forgetPw">
                   <a href="#"> Forgot password?</a>  
                </div>
                <div class="btn_control">
                    <input type="submit" class="btn" value="Sign up"/>
                </div>
            </form>
        </div> 
    </div>  
</body>
</html>