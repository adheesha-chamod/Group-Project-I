<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../Login/staffmemberLogin.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="./specialnotice.css">
    <title>Tap To Bus</title>
</head>

<body>
    <?php require "navbar.php"; ?>

    <div class="container1">
        <div class="notice-container">
            <div class="card">
                <h3>SPECIAL  NOTICES</h3>

                <form method="post">
                    <div class="text-area">
                        <textarea id="text-area" onfocus="document.quarySelector('.btn-back').style.display='block'" name="notice" disabled></textarea>
                        <div class="icons">
                            <a href="" onclick="{
                            document.getElementById('text-area').disabled = false;
                            document.getElementById('save-btn').style.display = 'block';
                            document.getElementById('cancel-btn').style.display = 'block';
                        }"><i class="fa fa-edit"></i></a>

                            <a href="">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>
                    </div>
                    <div class="btn-back">
                        <a id="save-btn" href="" class="">save</a>

                        <a onclick="{
                            document.getElementById('text-area').disabled = ture;
                            document.quarySelector('.btn-back').style.display = 'none';
                        }" id="cancel-btn" href="" class="">cancel</a>
                    </div>
                </form>
                <button id="addnotice" onclick="opennotice()">+ Add Notice</button>
           </div>
        </div>

        <div class="calander-container"></div>
    </div>
<!-- popup form -->


    <div class="notice-model" id="notice-model" >
        <div class="model">
            <div class="notice">
                <h3>ADD NEW NOTICE</h3>
                <form action="" method="post">
                    <input type="text" placeholder="Title">
                    <textarea placeholder="Notice description ....." name="notice"></textarea>
                </form>
            </div>
            <div class="top-form">
                <div class="closemodel" onclick="closenotice()"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
            </div>
        </div>
    </div>

    <!-- j script -->
    <script type="text/javascript">
        // $(function(){
        //     $('#addnotice').click(function(){
        //         $('#notice-model').fadeIn().css("display","flex");
        //     });

        //     $('.closemodel').click(function(){
        //         $('#notice-model').fadeout();
        //     });

        // })

        // ===============================

        let popup = document.getElementById("notice-model");

        function opennotice() {
           popup.classList.add(".notice-model");
        }

        function closenotice() {
           popup.classList.remove(".notice-model");
        }

    </script>
</body>

</html>


<!-- 
      <div class="notice-model" id="notice-model">
            <div class="model">
                <div class="notice">
                    <u class="notice_line">
                        <h3 class="notice_Title">ADD NEW NOTICE</h3>
                    </u>
                    <form action="../CRUD/addSpecialNotices.php" method="post">
                        <input type="text" placeholder="Title" name="title">
                        <textarea name="description" placeholder="Notice description ....."></textarea>
                  
                        <button type="submit" class="btns" name="save">Save</button>
                      
                    </form>
                </div>
                <div class="top-form">
                    <div class="closemodel" onclick="closenotice()"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                </div>
            </div>
        </div>
 -->