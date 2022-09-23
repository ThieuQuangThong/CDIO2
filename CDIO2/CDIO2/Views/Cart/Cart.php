<?php
include '../../Models/CartDB.php';
$products = getAllProductFromCart();
$total = 0;
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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
        .h4_cl{
            color: white;
        }
        .total_area {
            padding-bottom: 18px !important;
            /* border: 1px solid #E6E4DF; */
            color: #696763;
            padding: 30px 25px 30px 0;
            margin: 20px;
        }

        .total_area span {
            float: right;
        }

        .total_area ul li {
            background: #e6e4df;
            color: #696763;
            margin-top: 10px;
            margin-left: 39px;
            padding: 7px 20px;
        }
        .update {
            margin-left: 40px;
        }
        .total_area a {
            background: #fe980f;
            border-radius: 0;
            color: #ffffff;
            margin-top: 18px;
            border: none;
            padding: 5px 15px;
        }

        .update {
            margin-left: 40px;
        }

        .check_out {
            margin-left: 20px;
        }
    </style>
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
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="image">Product</td>
                                <td class="description"></td>
                                <td class="price">Price</td>
                                <td class="quantity">Quantity</td>
                                <td class="total">Total</td>
                                <td class="cart_delete"></td>
                            </tr>

                        </thead>
                        <tbody>
                                <?php foreach($products as $product) : ?>
                                    <?php $total += $product['Totals'] ?>
                                    <tr>
                                        <td class="cart_product">
                                            <a href=""><img src="../../<?php echo $product['Image'] ?>" alt=""></a>
                                        </td>
                                        <td class="cart_description">
                                            <h4 class="h4_cl"><?php echo $product['Name'] ?></h4>
                                        </td>
                                        <td class="cart_price">
                                            <p><?php echo $product['Price'] ?></p>
                                        </td>
                                        <td class="cart_quantity">
                                            <div class="cart_quantity_button">
                                                <a class="cart_quantity_up" href="../../index.php?page=cart&function=minus_Quantity&id=<?php echo $product['Id'] ?>"> - </a>
                                                <input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $product['Quantity'] ?>" autocomplete="off" size="1">
                                                <a class="cart_quantity_down" href="../../index.php?page=cart&function=add_Quantity&id=<?php echo $product['Id'] ?>"> + </a>
                                            </div>
                                        </td>
                                        <td class="cart_total">
                                            <p class="cart_total_price"><?php echo $product['Totals']?></p>
                                        </td>
                                        <td class="cart_delete">
                                            <a class="cart_quantity_delete" href="../../index.php?page=cart&function=remove_From_cart&id=<?php echo $product['Id'] ?>"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">
                        <div class="total_area">
                            <ul>
                                <li>Cart Total <span><?php echo $total."đ" ?></span></li>
                                <li>Shipping Cost <span>200.000đ</span></li>
                                <li>Total <span class="allTotal"><?php echo ($total + 200000)."đ" ?></span></li>
                            </ul>
                            <!-- <a class="btn btn-default update" href="">Update</a> -->
                            <a class="btn btn-default check_out" href="../../index.php?function=remove_all_from_cart">Check Out</a>
                        </div>
                    </div>
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