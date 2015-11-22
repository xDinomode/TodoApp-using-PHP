<?php
session_start();

if(isset($_SESSION["name"])){

} else{
    header('Location: /hey/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>
    <h1 style="color:red; font-family:sans-serif;">Hello
        <?php
            echo $_SESSION["name"] . "<br>";
        ?>
    </h1>

    <a href="/hey/logout.php">Logout</a>
</body>
</html>