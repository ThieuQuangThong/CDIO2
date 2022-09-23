<?php
//Load page
if (!isset($_GET['page'])) 
{
    header('Location:Views/Home/Home_Login.php');
}
else if ($_GET['page'] == 'fishing') {
    header('Location:Views/Fishing/Fishing.php');
}
else if($_GET['page'] == 'tent'){
    header('Location:Views/Tent/Tent.php');
}
else if($_GET['page'] == 'hiking_equipment'){
    header('Location:Views/Hiking_Equipment/Hiking_Equipment.php');
}
else if($_GET['page'] == 'sleeping_bag'){
    header('Location:Views/Sleeping Bag/Sleeping_Bag.php');
}
else if($_GET['page'] == 'other_equipment'){
    header('Location:Views/Other Equipment/Other_Equipment.php');
}
else if($_GET['page'] == 'cart'){
    header('Location:Views/Cart/Cart.php');
}


//Run function
if (isset($_GET['function'])) {
    //add to cart
    if ($_GET['function'] == "add_to_cart") {
        if($_GET['page'] == 'fishing'){
            require_once 'Models/FishingDB.php';
            include 'Models/CartDB.php';
            $id = $_GET['id'];
            $product = getFishingById($id);

            $img_tmp = $product['Image'];
            $name_tmp = $product['Name'];
            $price_tmp = $product['Price'] - $product['Price']*50/100;

            $add_count = insertToCart($img_tmp,$name_tmp,$price_tmp);
            if($add_count > 0){
                header('Location:Views/Fishing/Fishing.php');
            }
        }
        else if($_GET['page'] == 'hiking_equipment'){
            require_once 'Models/Hiking_EquipmentDB.php';
            include 'Models/cartDB.php';
            $id = $_GET['id'];
            $product = getHiking_EquipmentById($id);

            $img_tmp = $product['Image'];
            $name_tmp = $product['Name'];
            $price_tmp = $product['Price'] - $product['Price']*50/100;

            $add_count = insertToCart($img_tmp,$name_tmp,$price_tmp);
            if($add_count > 0){
                header('Location:Views/Hiking_Equipment/Hiking_Equipment.php');
            }
        }
        else if($_GET['page'] == 'other_equipment'){
            require_once 'Models/Other_EquipmentDB.php';
            include 'Models/cartDB.php';
            $id = $_GET['id'];
            $product = getOther_EquipmentById($id);

            $img_tmp = $product['Image'];
            $name_tmp = $product['Name'];
            $price_tmp = $product['Price'] - $product['Price']*50/100;

            $add_count = insertToCart($img_tmp,$name_tmp,$price_tmp);
            if($add_count > 0){
                header('Location:Views/Other Equipment/Other_Equipment.php');
            }
        }
        else if($_GET['page'] == 'sleeping_bag'){
            require_once 'Models/Sleeping_BagDB.php';
            include 'Models/cartDB.php';
            $id = $_GET['id'];
            $product = getSleeping_BagById($id);

            $img_tmp = $product['Image'];
            $name_tmp = $product['Name'];
            $price_tmp = $product['Price'] - $product['Price']*50/100;

            $add_count = insertToCart($img_tmp,$name_tmp,$price_tmp);
            if($add_count > 0){
                header('Location:Views/Sleeping Bag/Sleeping_Bag.php');
            }
        }
        else if($_GET['page'] == 'tent'){
            require_once 'Models/TentDB.php';
            include 'Models/cartDB.php';
            $id = $_GET['id'];
            $product = getTentById($id);

            $img_tmp = $product['Image'];
            $name_tmp = $product['Name'];
            $price_tmp = $product['Price'] - $product['Price']*50/100;

            $add_count = insertToCart($img_tmp,$name_tmp,$price_tmp);
            if($add_count > 0){
                header('Location:Views/Tent/Tent.php');
            }
        }   
    }
    //end add to cart

    //add quantity
    else if($_GET['function'] == "add_Quantity"){
        include 'Models/CartDB.php';
        $id = $_GET['id'];
        $product = getProductInCartById($id);

        $prd_quantity = $product['Quantity'];
        $prd_price = $product['Price'];

        $add_count = add_Quantity($id,$prd_quantity,$prd_price);
        if($add_count > 0){
            header('Location:Views/Cart/Cart.php');
        }
    }
    //end add quantity

    //minus quantity
    else if($_GET['function'] == "minus_Quantity"){
        include 'Models/cartDB.php';
        $id = $_GET['id'];
        $product = getProductInCartById($id);

        $prd_quantity = $product['Quantity'];
        $prd_price = $product['Price'];

        $minus_count = minus_Quantity($id,$prd_quantity,$prd_price);

        if($prd_quantity == 1){
            $remove_count = deleteFromCart($id);
        }
        if($minus_count > 0){
            header('Location:Views/Cart/Cart.php');
        }
    }
    //endminus quantity

    //remove from cart when click x button
    else if($_GET['function'] == "remove_From_cart"){
        include 'Models/cartDB.php';
        $id = $_GET['id'];

        $remove_count = deleteFromCart($id);

        if($remove_count > 0){
            header('Location:Views/Cart/Cart.php');
        }
    }
    //end

    
    else if($_GET['function'] == "remove_all_from_cart"){
        include 'Models/cartDB.php';

        $delete_all = delete_All_from_cart();

        if($delete_all > 0){
            header('Location:Views/Cart/Cart.php');
        }
    }

    else if($_GET['function'] == 'login'){
        include 'Models/UserDB.php';

        $username = $_POST['UserName'];
        $password = $_POST['Password'];
        $check=check_LG($username,$password);
        if($check > 0){
            if($check["Role"]=="2")
                header('Location:http://localhost/CDIO2/CDIO2/Views/Home/Home.php');
            else
                header('Location:http://localhost/CDIO2/CDIO2/Views/Home/Admin_Home.php');
        }
        else{
            header('Location:http://localhost/CDIO2/CDIO2/Views/Home/Login.php');

        }
    }

    else if($_GET['function'] == 'signup'){
        include_once 'Models/UserDB.php';

        $username_tmp = $_POST['UserName'];
        $password_tmp = $_POST['Password'];

        $insert_count =  Insert_new_account($username_tmp,$password_tmp);
    //    var_dump($insert_count); exit();
        if($insert_count > 0){
            header('Location:http://localhost/CDIO2/CDIO2/Views/Home/Login.php');
        }
    }

    else if($_GET['function'] === "add_new_user"){
        include_once 'Models/user_detailDB.php';

        $name_tmp = $_POST['Name'];
        $email_tmp = $_POST['Email'];
        $address_tmp = $_POST['Address'];
        $phone_tmp = $_POST['Phone'];

        $insert_count = insertUser($name_tmp,$email_tmp,$address_tmp,$phone_tmp);

        // var_dump($insert_count > 0);
        // exit();
        if($insert_count > 0){
            //header('Location :  Views/Admin_Home/User_management.php');
            //echo 'hihi';
            header('Location:Views/Admin_Home/User_management.php');
        }
    }

    else if($_GET['function'] == 'remove_user'){
        include_once 'Models/user_detailDB.php';

        $id = $_GET['id'];

        $remove_count = deleteUser($id);

        if($remove_count > 0){
            header('Location:Views/Admin_Home/User_management.php');
        }
    }

    else if($_GET['function'] == "update_user"){
        include_once 'Models/user_detailDB.php';
        $id = $_POST['id'];
        $name_tmp = $_POST['Name'];
        $email_tmp = $_POST['Email'];
        $address_tmp = $_POST['Address'];
        $phone_tmp = $_POST['Phone'];

        $update_count = updateUser($id,$name_tmp,$email_tmp,$address_tmp,$phone_tmp);

        if($update_count > 0){
            header('Location:Views/Admin_Home/User_management.php');
        }
    }

    else if($_GET['function'] == "remove_fishing"){
        include_once 'Models/FishingDB.php';

        $id = $_GET['id'];
        $remove_count = deleteFishing($id);

        if($remove_count > 0){
            header('Location:Views/Admin_Home/Product_management.php');
        }
    }

    else if($_GET['function'] == "add_new_fishing"){
        include_once 'Models/FishingDB.php';
        $path = 'imageCDIO/fishing/';
        $insert_Count;
        if(isset($_FILES['Image'])){
            // var_dump($_FILES['avatar']['tpm_name']);
            if($_FILES['Image']['tmp_name']!=null){
                $filename = $_FILES['Image']['name'];
                $path = $path . $filename;
                if(move_uploaded_file($_FILES['Image']['tmp_name'],$path)){
                    $name_tmp = $_POST['Name'];
                    $price_tmp = $_POST['Price'];
                    $des_tmp = $_POST['Description'];
                    $insert_Count = insertFishing($path,$name_tmp,$price_tmp,$des_tmp);
                    //var_dump($insert_Count);
                    if($insert_Count > 0){
                        header('Location:Views/Admin_Home/Product_management.php');
                    } 
                }
            }
        }
    }

    else if($_GET['function'] == "update_fishing"){
        include_once 'Models/FishingDB.php';
        $path = 'imageCDIO/fishing/';
        $id_tmp = $_POST['Id'];
        // var_dump($id_tmp);
        // exit();
        if(isset($_FILES['Image'])){
            // var_dump($_FILES['avatar']['tpm_name']);
            if($_FILES['Image']['tmp_name']!=null){
                $filename = $_FILES['Image']['name'];
                $path = $path . $filename;
                if(move_uploaded_file($_FILES['Image']['tmp_name'],$path)){
                    $name_tmp = $_POST['Name'];
                    $price_tmp = $_POST['Price'];
                    $des_tmp = $_POST['Description'];
                    $update_Count = updateFishing($id_tmp,$path,$name_tmp,$price_tmp,$des_tmp);
                    //var_dump($insert_Count);
                    if($update_Count > 0){
                        header('Location:Views/Admin_Home/Product_management.php');
                    } 
                }
            }
        }
    }

}
?>