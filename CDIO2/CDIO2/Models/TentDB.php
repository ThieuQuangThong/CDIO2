<?php
include 'connectDb.php';
function getAllTent(){
    global $db;
    $products = $db->query("select * from `tent`");
    return $products;
}
function getTentById($id){
    global $db;
    $product = $db->query("SELECT * from `tent` WHERE id = $id")->fetch();
    return $product;
}

?>