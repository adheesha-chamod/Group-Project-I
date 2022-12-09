<?php
session_start();
require '../Login/dbh.inc.php';


if (isset($_POST["save"])) {

    if (!empty($_POST["title"]) && !empty($_POST["description"])) {

        $title = mysqli_real_escape_string($conn, $_POST["title"]);
        $description = mysqli_real_escape_string($conn, $_POST["description"]);


        $staff_no = $_SESSION['staff_no'];
        // echo $staff_no;
        $sql = "INSERT INTO special_notices (staff_no,title,description) VALUES ('$staff_no','$title', '$description')";
        $run = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        header("Location:../Home/home.php?addNotice=success");

        if ($run) {
            echo "form submited successfully";
        } else {
            echo "form submit failed";
        }
    } else {
        echo " All fields are required ";
    }
}
