<?php
include 'connectDb.php';
function check_LG($username,$password){
    global $db;
    $login = $db->query("SELECT * from `account` WHERE UserName = '$username' AND Password = '$password'")->fetch();
    return $login;
}


function Insert_new_account($username,$password){
    global $db;
    $insert_Count = $db->exec("INSERT INTO `account` VALUES ('$username','$password', 2)");
    return $insert_Count;
}

?>