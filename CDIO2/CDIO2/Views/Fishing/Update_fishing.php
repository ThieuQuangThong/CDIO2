<?php
include_once '../../Models/FishingDB.php';
$products = getFishingById($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="../../fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../shoppingcss.css">
    <link rel="stylesheet" href="../../CartCss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .h4_cl,
        .us_name{
            color: white;
        }
    </style>
</head>

<body>
    <div class="total_page">
        <div class="content">
        <div class="content_menu">
                <nav class="navbar navbar-expand-lg   navbar-dark ">
                    <<!-- Brand -->
                    <a class="navbar-brand " href="../Home/Home.php">
                        <img src="../../imageCDIO/277854291_369445938567430_2751702891462754054_n.png" alt="">
                    </a>
                    <!-- Toggler/collapsibe Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navbar links -->
                    <div class="collapse navbar-collapse " id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link " href="./Admin_Home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../Admin_Home/Product_management.php">Product Management</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../Admin_Home/User_management.php">User Management</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <form action="../../index.php?function=update_fishing" enctype="multipart/form-data" method="post" id="add_user">
            <input type="hidden" class="form-control" value="<?php echo $products['Id'] ?>" name="Id" required>
                            <!-- <div class="auth-form__group">
                                <input id="passs" type="text" name="Image_old" value="<?php echo $products['Image'] ?>" class="auth-form__input" placeholder="Email">
                                <p class="upasss"></p>
                            </div> -->
                            <img src="<?php echo $products['Image'] ?>" alt="">
                            <div>
                                <input id="passs" type="text" value="<?php echo $products['Image'] ?>" class="auth-form__input" placeholder="Email">
                                <input type="file" name="Image" row="2">
                            </div>
                            <!-- <div class="form-group">
                                <label for="exampleTextarea1">New Image<span
                                    style="color:red;"><?php echo isset($_SESSION['error']['avatar']) ? $_SESSION['error']['avatar'] : ''; ?></label>
                                <br>
                                    <input type="file" name="Image" row="2">
                            </div> -->
                            <div class="auth-form__group">
                                <input id="passs" type="text" name="Name" value="<?php echo $products['Name'] ?>" class="auth-form__input" placeholder="Name">
                                <p class="upasss"></p>
                            </div>
                            <div class="auth-form__group">
                                <input id="passs" type="text" name="Price" value="<?php echo $products['Price'] ?>" class="auth-form__input" placeholder="Price">
                                <p class="upasss"></p>
                            </div>
                            <div class="auth-form__group">
                                <input id="passs" type="text" name="Description" value="<?php echo $products['Description'] ?>" class="auth-form__input" placeholder="Description">
                                <p class="upasss"></p>
                            </div>
                            <button>
                                Update
                            </button>

    </div>                   
            </form>
        </div>
        
        </div>
        <div class="copyright">@copyright by WILDGUY</div>
    </div>
</body>

</html>