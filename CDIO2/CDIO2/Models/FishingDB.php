<?php
include 'connectDb.php';
function getAllFishing(){
    global $db;
    $products = $db->query("select * from `fishing`");
    return $products;
}
function getFishingById($id){
    global $db;
    $product = $db->query("SELECT * from `fishing` WHERE id = $id")->fetch();
    return $product;
}

function insertFishing($img ,$name, $price,$des){
    global $db;
    $insert_Count = $db->exec("INSERT INTO `fishing`( `Image`,`Name`, `Price`, `Description`) 
    VALUES ('$img','$name', $price, '$des')" );
    return $insert_Count;
}

function deleteFishing($id){
    global $db;
    $delete_Count = $db->exec("DELETE FROM `fishing` WHERE `fishing`.`Id` =$id");
    return $delete_Count;
}

function updateFishing($id, $img ,$name, $price,$des){
    global $db;
    $add = $db->exec("UPDATE `fishing` SET `Image`= '$img',`Name` = '$name' ,`Price` = $price, `Description`= '$des'
    WHERE `fishing`.`Id`=$id");
    return $add;
}

?>