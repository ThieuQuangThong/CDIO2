<?php
include '../../Models/user_detailDB.php';
$users = getAllUser();
session_start();
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
                    <a class="navbar-brand " href="../Home/Admin_Home.php">
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
                                <a class="nav-link " href="../Home/Admin_Home.php">Home</a>
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
            <a href="../User/Insert_User.php">Add new User</a>
            <div class="container">
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="image">Name</td>
                                <td class="price">Email</td>
                                <td class="quantity">Address</td>
                                <td class="total">Phone</td>
                            </tr>

                        </thead>
                        <tbody>
                                <?php foreach($users as $user) : ?>
                                    <tr>
                                        <td class="cart_product us_name">
                                            <?php echo $user['Name']  ?>
                                        </td>
                                        <td class="cart_description">
                                            <h4 class="h4_cl"><?php echo $user['Email'] ?></h4>
                                        </td>
                                        <td class="cart_price">
                                            <p><?php echo $user['Address'] ?></p>
                                        </td>                                  
                                        <td class="cart_total">
                                            <p class="cart_total_price"><?php echo $user['Phone']?></p>
                                        </td>
                                        <td class="cart_delete">
                                            <a class="cart_quantity_delete" href="../../index.php?function=remove_user&id=<?php echo $user['id'] ?>"><i class="fa fa-times"></i></a>
                                            <a href="../User/Update_user.php?id=<?php echo $user['id'] ?>">Update</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="subcribe">
            <div class="subcribe-content">
                <h1>SUBSCRIBE TO OUR EMAILS</h1>
                <p>Be the first to know about new collections and exclusive offers.</p>
                <input type="email" placeholder="Email" name="text2">
            </div>
        </div>
        <div class="footer">
            <div class="left">
                <h1>ABOUT US</h1>
                <p>Search</p>
                <p>Terms of Service</p>
                <p>Refund policy</p>
            </div>

            <div class="right">
                <img src="../../imageCDIO/277854291_369445938567430_2751702891462754054_n.png" alt="">

                <div class="right-text">
                    <p>Our Aim is to Get this generation back into the Outdoors</p>
                </div>
            </div>
        </div>
        <div class="copyright">@copyright by WILDGUY</div>
    </div>
</body>

</html>