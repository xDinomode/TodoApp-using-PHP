<?php
    if(isset($_POST["name"])){
        session_start();

        $_SESSION["name"] = $_POST["name"];

        header('Location: /hey/userpage.php');
    }