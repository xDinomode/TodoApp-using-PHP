<?php
session_start();

if(isset($_SESSION["name"])){

} else{
    header('Location: /hey/index.php');
}


class MyDB extends SQLite3{
    function __construct(){
        $this->open("test.db");
    }
}

$db = new MyDB();

if(!$db){
    echo $db->lastErrorMsg();
} else{
    echo "Database opened successfully\n";
}



if(isset($_POST["task"])){
        $new  = $_POST["task"];
        $uname = $_SESSION["name"];

$sql =<<<EOF
    INSERT INTO USERS(NAME, TODO)
    VALUES('$uname',' $new');
EOF;

    $ret = $db->exec($sql);
    if(!$ret){
        echo $db->lastErrorMsg();
    } else{
        echo "Record inserted";
    }

    $db->close();

    header('Location: /hey/userpage.php');
} else{
        header('Location: /hey/userpage.php');
}
?>