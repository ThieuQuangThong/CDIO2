<?php
include 'connectDB.php';
function getAllProductFromCart(){
    global $db;
    $products = $db->query("select * from `cart`");
    return $products;
}

function getProductInCartById($id){
    global $db;
    $product = $db->query("SELECT * from `cart` WHERE Id = $id")->fetch();
    return $product;
}

function insertToCart($image, $name, $price){
    global $db;
    $insert_Count = $db->exec("INSERT INTO `cart`( `Image`,`Name`, `Price`, `Quantity`, `Totals`) 
    VALUES ('$image','$name', $price, 1, ($price * 1))");
    return $insert_Count;
}

function deleteFromCart($id){
    global $db;
    $delete_Count = $db->exec("DELETE FROM `cart` WHERE Id=$id");
    return $delete_Count;
}

function add_Quantity($id,$prd_Quantity,$prd_Price){
    global $db;
    $quantity_tmp = $prd_Quantity + 1;
    $add = $db->exec("UPDATE `cart` SET `Quantity`= $quantity_tmp,`Totals` = ($quantity_tmp * $prd_Price) 
    WHERE `cart`.`Id`=$id");
    return $add;
}

function minus_Quantity($id,$prd_Quantity,$prd_Price){
    global $db;
    $quantity_tmp = $prd_Quantity - 1;
    $add = $db->exec("UPDATE `cart` SET `Quantity`= $quantity_tmp,`Totals` = ($quantity_tmp * $prd_Price) 
    WHERE `cart`.`Id`=$id");
    return $add;
}

function delete_All_from_cart(){
    global $db;
    $delete_All = $db->exec("DELETE FROM `cart`");
    return $delete_All;
}

?>