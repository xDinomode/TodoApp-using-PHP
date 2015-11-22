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

    <p>Add new new task todo:</p>
    <form action="/hey/new.php" method ="POST">
        <input type="text" size="100" maxlength="100" name ="task">
        <input type="submit" value = "save">
    </form>

<?php
class MyDB extends SQLite3{
    function __construct(){
        $this->open("test.db");
    }
}

$db = new MyDB();

if(!$db){
    echo $db->lastErrorMsg();
} else{

}

$uname = $_SESSION["name"];

$sql =<<<EOF
    SELECT * FROM USERS WHERE name = '$uname';
EOF;

$ret = $db->query($sql);

if($ret){
    while($row = $ret->fetchArray(SQLITE3_ASSOC)){
    echo "<h3 style='color:#89bbf4;'>Todo: " . $row["TODO"] . "</h3>";
}
}

$db->close();



?>







    <a href="/hey/logout.php">Logout</a>
</body>
</html>