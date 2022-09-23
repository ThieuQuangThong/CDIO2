<?php
require_once('../../Models/TentDB.php');
$products = getAllTent();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tent</title>
    <!-- <link rel="stylesheet" href="../fontawesome-free-6.1.1-web/css/all.min.css"> -->
    <!-- <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.min.css"> -->
    <link rel="stylesheet" href="../../fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="../../style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

</head>

<body>
    <div class="total_page">
        <div class="header">
            <div class="container-fluid text-center">
                <h4>SELL UP TO 50% </h4>
            </div>
        </div>
        <div class="content">
            <div class="content_menu">
                <nav class="navbar navbar-expand-lg   navbar-dark ">
                    <!-- Brand -->
                    <a class="navbar-brand " href="../Home/Home.php">
                    <img src="../../imageCDIO/277854291_369445938567430_2751702891462754054_n.png" alt="">
                    </a>
                    <!-- Toggler/collapsibe Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navbar links -->
                    <div class="collapse navbar-collapse " id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link " href="../Home/Home.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../../index.php?page=fishing">ShopAll</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../Contact/Contact.php">Contact</a>
                                </li>
                            </ul>
                    </div>
                    <!-- Navbar icon -->
                    <div class="collapse navbar-collapse justify-content-end" style="padding-right: 4%;"
                        id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link " href="#">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../Cart/Cart.php">
                                    <i class="fa-solid fa-cart-flatbed-suitcase"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>

            <!-- Collections -->
            <div class="collection">
                <h1>Collections</h1>
                <ul>
                <li class="collection-item">
                        <img class="img_clt" src="https://cdn.shopify.com/s/files/1/0638/6345/5956/files/fishing.jpg?v=1649598876&width=710" alt="">
                        <div class="collection-content">
                            <h2>Fishing</h2>
                            <div class="shop">
                                <a href="../../index.php?page=fishing" class="hv">
                                    SHOP
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="collection-item">
                        <img class="img_clt" src="https://m.media-amazon.com/images/I/81e-ABh+zKS._AC_SX679_.jpg" alt="">
                        <div class="collection-content">
                            <h2>Tent</h2>
                            <div class="shop">
                                <a href="../../index.php?page=tent" class="hv">
                                    SHOP
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="collection-item">
                        <img class="img_clt" src="https://m.media-amazon.com/images/I/415y0jWQpCL._AC_SY450_.jpg" alt="">
                        <div class="collection-content">
                            <h2>Slepping Bag</h2>
                            <div class="shop">
                                <a href="../../index.php?page=sleeping_bag" class="hv">
                                    SHOP
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="collection-item">
                        <img class="img_clt" src="https://www.salomon.com/sites/default/files/styles/squared_600/public/content_hub/teaser_import/portrait__10041.jpg?itok=bb3c4Iiw" alt="">
                        <div class="collection-content">
                            <h2>Hiking Equipment</h2>
                            <div class="shop">
                                <a href="../../index.php?page=hiking_equipment" class="hv">
                                    SHOP
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="collection-item">
                        <img class="img_clt" src="https://m.media-amazon.com/images/I/81p+NeypUyL._AC_SX425_.jpg" alt="">
                        <div class="collection-content">
                            <h2>Accessory</h2>
                            <div class="shop">
                                <a href="../../index.php?page=other_equipment" class="hv">
                                    SHOP
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Collections end-->

            <!-- Fishing -->
            <div class="fishing">
                <h1>Tent</h1>
                <div class="fish-item">
                    <div class="body__content content__section">
                        <tbody>
                            <?php foreach ($products as $product) : ?>
                                <div class="cols col__4">
                                    <img class="img__css" src="../../<?php echo $product['Image'] ?>" alt="">
                                    <h3 class="prd__name"><?php echo $product['Name'] ?></h3>
                                    <p class="prd_price"><?php echo $product['Price'] ?></p>
                                    <button  class="prd__btn">
                                        <a href="./Tent_detail.php?id=<?php echo $product['Id'] ?>" class="a_color">Choose options</a>
                                    </button>
                                </div>
                            <?php endforeach; ?>
                        </tbody>
                    </div>
                    <div class="clear"></div>
                    <style>
                        .clear {
                            clear: both;
                        }

                        .content__section {
                            width: 100%;
                            max-width: 100%;
                            margin-left: auto;
                            margin-right: auto;
                        }

                        .cols {
                            float: left;
                        }

                        .col__4 {
                            display: inline-block;
                            width: 24%;
                            margin-top: 10px;
                            margin-right: 5px;
                            text-align: center;
                        }

                        .img__css {
                            width: 100%;
                        }

                        .prd__name,
                        .prd_price {
                            color: white;
                        }

                        .prd__btn {
                            width: 90%;
                            line-height: 3.5;
                            border-radius: 30px;
                            background-color: #1f1f21;
                            color: white;
                            border: 3px solid white;
                            margin-bottom: 5%;
                        }
                        .a_color{
                            color: white;
                            font-size: 20px;
                        }
                    </style>

                    <div class="pagination">
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- fishing end -->
            <!-- Subcribe -->
            <div class="subcribe">
                <div class="subcribe-content">
                    <h1>SUBSCRIBE TO OUR EMAILS</h1>
                    <p>Be the first to know about new collections and exclusive offers.</p>
                    <input type="email" placeholder="Email" name="text2">
                </div>
            </div>
        </div>
        <!-- footer -->
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