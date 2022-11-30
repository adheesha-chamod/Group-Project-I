<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $type = $_POST["type"];

        if($type == "passenger"){
            header("Location: ../passenger/signup-form.php");
        }else if($type == "owner"){
            //header("Location: ../owner/signup-form.php");
        }else{
            die("Type is required");
        }
    }
?>