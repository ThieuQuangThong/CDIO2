<?php
include 'connectDb.php';
function getAllOther_Equipment(){
    global $db;
    $products = $db->query("select * from `other_equipment`");
    return $products;
}
function getOther_EquipmentById($id){
    global $db;
    $product = $db->query("SELECT * from `other_equipment` WHERE id = $id")->fetch();
    return $product;
}

?>