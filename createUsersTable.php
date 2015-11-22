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
    echo "Database opened successfully\n";
}

$sql = <<<EOF
    CREATE TABLE USERS(
        NAME TEXT NOT NULL,
        TODO CHAR(100)
        );
EOF;

$ret = $db->exec($sql);

if(!$ret){
    echo $db->lastErrorMsg();
} else{
    echo "Table created successfully";
}

$db->close();

