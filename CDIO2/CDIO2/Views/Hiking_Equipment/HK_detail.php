<?php
    include '../../Models/Hiking_EquipmentDB.php';
    $product = getHiking_EquipmentById($_GET['id']);
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>
    <link rel="stylesheet" href="../../fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../shoppingcss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
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
                    <div class="collapse navbar-collapse justify-content-end" style="padding-right: 4%;" id="collapsibleNavbar">
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

            <div class="container">
                <div class="product">
                    <div class="product_img">
                        <ul class="list_product_img">
                            <li>
                                <img src="../../<?php echo $product['Image'] ?>" alt="">
                            </li>

                        </ul>
                    </div>
                    <div class="product_info">
                        <h2> <?php echo $product['Name'] ?></h2>
                        <div class="product_price">
                            <div class="price_sale">
                                <?php echo $product['Price'] ?>
                            </div>
                            <div class="price_real"> <?php echo $product['Price'] - $product['Price']*50/100 ?> </div>
                            <div class="sale"> Sale 50%</div>
                        </div>
                        <div class="color">
                            <label style="margin-right: 5px;">Color</label>
                            <div class="list_color">
                                <button>Black</button>
                                <button>White</button>
                                <button>Blue</button>
                                <button>Yellow</button>
                                <button>Orange</button>
                            </div>
                        </div>
                        <div class="descrip_size">
                            <label class="des_size" style="margin-right: 5px;">Description</label>
                            <div class="des_size des_detail">
                                <?php echo $product['Description'] ?>
                            </div>
                        </div>
                        <div class="add_to_cart">
                            <button class="btn_add">
                                <a href="../../index.php?page=hiking_equipment&function=add_to_cart&id=<?php echo $product['Id']; ?>"> Add To Cart</a>                               
                            </button>
                        </div>
                    </div>
                    <style>
                        .descrip_size{
                            width: 100%;
                            height: 100%;
                            /* background-color: white; */
                        }
                        .des_size{
                            font-size: 100%;
                            margin-top: 2%;
                            /* color: #888; */
                        }
                        .des_detail{
                            margin-left: 2%;
                        }
                    </style>

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