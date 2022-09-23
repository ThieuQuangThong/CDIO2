<?php
include 'connectDb.php';
function getAllHiking_Equipment(){
    global $db;
    $products = $db->query("select * from `hiking_equipment`");
    return $products;
}
function getHiking_EquipmentById($id){
    global $db;
    $product = $db->query("SELECT * from `hiking_equipment` WHERE id = $id")->fetch();
    return $product;
}

?>