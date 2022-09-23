<?php
include 'connectDb.php';
function getAllSleeping_Bag(){
    global $db;
    $products = $db->query("select * from `sleeping_bag`");
    return $products;
}
function getSleeping_BagById($id){
    global $db;
    $product = $db->query("SELECT * from `sleeping_bag` WHERE id = $id")->fetch();
    return $product;
}

?>