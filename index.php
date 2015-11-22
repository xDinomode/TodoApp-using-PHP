<?php


    session_start();
    if(isset($_SESSION["name"])){
        header('Location: /hey/userpage.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
    <h1>Welcome to the homepage</h1>
    <h2>Build a todo app!</h2>


    <form action="/hey/setSession.php" method ="POST">
            <label>Pick a name
                <input type="text" name = "name" placeholder = "Name">
            </label>
            <input type="submit" value = "submit">
    </form>



        <br>
        <label>Date:</label>
        <i><?php
          $time = time();
             echo date("m-d-Y", $time);
        ?>
        </i>

</body>
</html>



