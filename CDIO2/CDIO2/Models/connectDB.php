<?php
    try{
        $dsn = "mysql:host=localhost;dbname=camping_prj";
        $userpdo ="root";
        $passwordpdo ="";
        $db = new PDO($dsn, $userpdo, $passwordpdo);
        // echo "Success";
    }catch(PDOException $ex){
        echo "Fail to connect to the database";
    }
?>