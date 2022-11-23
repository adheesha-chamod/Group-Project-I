<?php
// header('refresh: 1; url='. $_SERVER['REQUEST_URI']);
require '../Login/dbh.inc.php';

session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../Login/staffmemberLogin.php');
}
// echo isset($_SESSION['errorMsg']) ? $_SESSION['errorMsg'] : '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="homestylenew.css">
    <link rel="stylesheet" href="./specialnotice.css">
    <title>Tap To Bus</title>
</head>

<body>
    <?php require "navbar.php"; ?>

    <div class="container1">
        <div class="notice-container">
            <div class="card">
                <h3>SPECIAL NOTICES</h3>

                <div class="add-notice">
                    <!-- <button id="addnotice" class="addnotice" onclick="opennotice()"><i class="fa-solid fa-circle-plus"></i> Add Notice</button> -->
                    <button id="addnotice" class="addnotice" onclick="openModal()"><i class="fa-solid fa-circle-plus"></i> Add Notice</button>
                </div>

                <!-- ================================================================================================ -->

                <?php

                $sql = "SELECT * FROM special_notices INNER JOIN staffmember ON special_notices.staff_no = staffmember.staff_no order by time_stamp desc";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      
                ?>

                        <div class="grid">
                            <div class="text-fields">
                                <div class="notice-author-timestamp">
                                    <div class="notice-author">
                                        <p class="author-text"><?php echo $row['first_name']?></p>
                                        <p class="author-text"><?php echo $row['last_name']?></p>
                                    </div>
                                    <p class="time"><?php echo $row['time_stamp']?></p>
                                </div>
                                <form>
                                    <input type="text" name="title" id="title-<?php echo $row['notice_id'] ?>" value="<?php echo $row['title']; ?>" disabled>
                                    <textarea name="description" id="text-area-<?php echo $row['notice_id'] ?>" cols="30" rows="5" disabled><?php echo $row['description']; ?></textarea>
                                    <div class="save-cancel-btns" id="save-cancel-btns-<?php echo $row['notice_id'] ?>">
                                        <button type="submit" name="save" class="save-btn">Save</button>
                                        <button type="submit" name="cancel" class="cancel-btn">Cancel</button>
                                    </div>
                                </form>
                            </div>
                            <div class="edit-delete-btns">
                                <button class="edit-btn" onclick="enableEdit(<?php echo $row['notice_id'] ?>)"><i class="fa-solid fa-pen"></i></button>
                                <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                            </div>
                        </div>



                        <!-- ========================================================================================================= -->


                        <!-- <form class="text-area" method="post">
                            <div class="notice">
                                <input type="text" name="notice_title" value="<?php echo $row['title']; ?>" readonly>
                                <textarea id="text-area" name="notice_description" disabled>
                                <?php echo $row['descript']; ?>
                                </textarea>
                                <div class="btn-back">
                                    <button type="submit" id="save-btn" class="">save</button>

                                    <button onclick="{
                                    document.getElementById('text-area').disabled = ture;
                                    document.quarySelector('.btn-back').style.display = 'none';
                                    }" id="cancel-btn" class="">cancel</button>
                                </div>
                            </div>

                            <div class="edit-delete-icons">
                                <p class="edit-icon" onclick="{
                                    document.getElementById('text-area').disabled = false;
                                    document.getElementById('save-btn').style.display = 'block';
                                    document.getElementById('cancel-btn').style.display = 'block';
                                    }">
                                    <i class="fa fa-edit"></i>
                                </p>

                                <button class="delete-icon">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </form> -->


                <?php
                    }
                } else {
                    echo "No notices";
                }

                ?>

            </div>
        </div>
        
        
        <dialog class="notice-modal">
            <div class="notice-container">
                <div class="notice-header">
                    <h1>Add special notices</h1>
                    <button onclick="closeModal()">
                        <i class="fa-sharp fa-solid fa-circle-xmark"></i>
                    </button>
                </div>
                <form action="../CRUD/addSpecialNotices.php" method="post">
                    <input type="text" placeholder="Title" name="title">
                    <textarea name="description" placeholder="Notice description ....."></textarea>
                    <button type="submit" name="save" id="addNotice">Add</button>
                </div>
            </form>
        </dialog>


















        <!-- <div class="notice-model" id="notice-model">
            <div class="model">
                <div class="notice">
                    <u class="notice_line">
                        <h3 class="notice_Title">ADD NEW NOTICE</h3>
                    </u>
                    <form action="../CRUD/addSpecialNotices.php" method="post">
                        <input type="text" placeholder="Title" name="title">
                        <textarea name="description" placeholder="Notice description ....."></textarea>
                         <input type="text" placeholder="Notice"> -->
                        <!-- <button type="submit" class="btns" name="save">Save</button> -->
                         <!-- <button type="button" class="btns">Cancle</button> -->
                    <!-- </form>
                </div>

                <div class="top-form">
                    <div class="closemodel" onclick="closenotice()"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                </div> -->
            <!-- </div> -->
        <!-- </div> -->
       
        <!-- ==================================================== -->
        <div class="calander-container">
            <div class="calendar-wrapper">
            <button id="btnPrev" type="button">Prev</button>
                <button id="btnNext" type="button">Next</button>
            <div id="divCal"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src ="calander.js"></script>
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




        function openModal() {
            document.querySelector('.notice-modal').showModal()
        }

        function closeModal() {
            document.querySelector('.notice-modal').close()
        }

























        // let popup = document.getElementById("notice-model");

        // function opennotice() {
        //     popup.classList.add("open-popup");
        // }

        // function closenotice() {
        //     popup.classList.remove("open-popup");
        // }

        // ============================================================================
        function enableEdit(id) {
            document.getElementById(`title-${id}`).disabled = false
            document.getElementById(`title-${id}`).style.border = "1px solid #000"
            document.getElementById(`text-area-${id}`).disabled = false
            document.getElementById(`text-area-${id}`).style.border = "1px solid #000"
            document.getElementById(`save-cancel-btns-${id}`).style.display = 'block'
        }
        // ===================================================================================
   
    </script>
</body>

</html>