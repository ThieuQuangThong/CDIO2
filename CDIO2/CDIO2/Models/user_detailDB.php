<?php
include 'connectDB.php';
function getAllUser(){
    global $db;
    $user = $db->query("select * from `user`");
    return $user;
}

function getUserById($id){
    global $db;
    $user = $db->query("SELECT * from `user` WHERE id = $id")->fetch();
    return $user;
}

function insertUser($name, $email,$address,$phone){
    global $db;
    $insert_Count = $db->exec("INSERT INTO `user`( `Name`,`Email`, `Address`, `Phone`) 
    VALUES ('$name','$email', '$address', '$phone')" );
    return $insert_Count;
}

function deleteUser($id){
    global $db;
    $delete_Count = $db->exec("DELETE FROM `user` WHERE id=$id");
    return $delete_Count;
}

function updateUser($id,$name, $email,$address,$phone){
    global $db;
    $add = $db->exec("UPDATE `user` SET `Name`= '$name',`Email` = '$email' ,`Address` = '$address', `Phone`= '$phone'
    WHERE `user`.`id`=$id");
    return $add;
}

?>