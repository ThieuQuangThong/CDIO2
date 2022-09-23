<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../../fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="../../style.css">

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
                                <a class="nav-link " href="./Home.php">Home</a>
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
                        <ul class="navbar-nav authen">
                            <li class="nav-item border-right nav-item__login">
                                <a href="./Login.php">Login</a>
                            </li>
                            <li class="nav-item  nav-item__signup">
                                <a href="./Signup.php">SignUp</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="introduce">
                <div class="ct">
                    <h1>Wellcome to</h1>
                    <h1 style="color: #f46f11;">CAMPING GEAR SHOP</h1>
                    <p>
                        Here at Outdoors society, it is our aim to reconnect this current generation with the outdoors. Through providing Affordable and High quality products we aim to be accessible to everyone.
                    </p>
                </div>
                <div class="ct">
                    <img src="../../imageCDIO/imghome.jpg" alt="">
                </div>

            </div>
            <div class="introduce">
                <div class="ct">
                    <img src="../../imageCDIO/campgear.jpg" alt="">
                </div>
                <div class="ct">
                    <h1>Camping gear</h1>
                    <h1>is essential</h1>
                    <p>
                        In matters of camping, it's generally a good rule of thumb to prepare for the unpredictable. The more prepared you are on this trip with the right camping gear means you can stay a little longer next time, confident that those extra batteries or pump
                        will be there if you need them. Mosquito nets and adequate lighting will keep you prepared for night walks, and kicking on into the night. Depending on the time of year you are pitching a tent, you may want to prepare for other
                        animal and insect visitors. Also, come prepared with more rope and elastic bands than you think you’ll need, as well as other camping and glamping accessories, as they will always find a good home.
                    </p>
                </div>


            </div>
            <div class="introduce">
                <div class="ct">
                    <h1>Let begin</h1>
                    <h1>Your journey</h1>
                    <p>
                        Let's start your own journey to discover a new land with full luggage.
                    </p>
                    <a href="../../index.php?page=fishing" type="button" class="shopnow">SHOP NOW</a>
                </div>
                <div class="ct">
                    <img src="../../imageCDIO/letgo.jpg" alt="">
                </div>
            </div>
        </div>
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

    <!-- <script>
        $(document).ready(function () {
            // 
            $('.nav-item__signup').click(function () {
                $('.modalhome').show()
                $('.auth-form__signup').show()
                return false
            })
            $('.nav-item__login').click(function () {
                $('.modalhome').show()
                $('.auth-form__login').show()
                return false
            })

            $('.auth-form__switch-btn1').click(function () {
                $('.auth-form__signup').hide()
                $('.auth-form__login').show()
            })
            $('.auth-form__switch-btn2').click(function () {
                $('.auth-form__login').hide()
                $('.auth-form__signup').show()
            })
            $('.auth-form__controls-back').click(function () {
                $('.modalhome').hide()
            })
            // $('auth-form__switch-btn2').click(function () {
            //     $('.auth-form__switch-btn--signup').css('background', 'red')
            // })

            var obj = {}
            // form register
            $('form#register').submit(function () {
                var a = $('#email').val()
                var b = $('#password').val()
                var c = $('#confirm').val()
                var demo = 1;
                objSub = {}
                function info(xx, yy) {
                    this.xx = xx;
                    this.yy = yy;
                }
                // objSub.xx = a;
                // objSub.yy = b;
                // objSub.zz = c;


                if (a == "" || a.length < 4) {
                    $('p.uemail').text("Vui lòng nhập gmail").css('color', 'red')
                    demo = 2
                }
                else {
                    $('p.uemail').text()
                }
                if (b == "" || b.length < 4) {
                    $('p.upass').text("Nhập mật khẩu").css('color', 'red')
                    demo = 2
                }
                else {
                    $('p.upass').text()
                }
                if (c == "") {
                    $('p.uconfirm').text("Nhập lại mật khẩu").css('color', 'red')
                    demo = 2
                }
                if (c != b) {
                    $('p.uconfirm').text("Mật khẩu chưa khớp").css('color', 'red')
                    demo = 2
                }
                else {
                    $('p.uconfirm').text()
                }

                if (demo == 1) {
                    var callUser = localStorage.getItem('register')
                    if (callUser) {
                        obj = JSON.parse(callUser)
                    }

                    // objSub = xx;
                    // objSub = yy;  
                    // objSub = zz;

                    objSub = new info(a, b)
                    obj[a] = objSub


                    localStorage.setItem('register', JSON.stringify(obj))
                    $('.auth-form__signup').hide()
                    $('.auth-form__login').show()
                }
                return false
            })

            $('form#login').submit(function () {
                var a = $('#emaill').val()
                var b = $('#passs').val()
                var flag = true;

                var remember = localStorage.getItem('register')
                if (remember) {
                    member = JSON.parse(remember)
                }
                Object.keys(member).map(function (key, index) {
                    if (a == '' || a !== member[key]['xx']) {
                        $('p.uemaill').text('Tài khoản bạn nhập chưa đúng').css('color', 'red')
                        return false;
                    }
                    if (a == member[key]['xx']) {
                        $('p.uemaill').text('')
                    }
                    else {
                        $('p.uemaill').text()
                    }
                    if (b == '' || b !== member[key]['yy']) {
                        $('p.upasss').text('Mật khẩu bạn nhập chưa đúng').css('color', 'red')
                        return false;
                    }
                    if (b == member[key]['yy']) {
                        $('p.upasss').text('')
                    }
                    else {
                        $('p.upasss').text()
                    }

                    if (flag) {
                        $('.modalhome').hide()
                        $('.authen').hide()
                    }
                })
                return false;
            })

        })
    </script> -->
    <div class="modalhome">
        <div class="modal__overlay">

        </div>
        <div class="modal__body">
            <!-- Register form -->
            <div class="auth-form auth-form__signup">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Sign Up</h3>
                        <span class="auth-form__switch-btn auth-form__switch-btn1">Login</span>
                    </div>
                    <form action="" id="register">
                        <div class="auth-form__form">
                            <div class="auth-form__group">
                                <input id="email" type="email" class="auth-form__input" placeholder="Email ">
                                <p class="uemail"></p>
                            </div>
                            <div class="auth-form__group">
                                <input id="password" type="password" class="auth-form__input" placeholder="Password ">
                                <p class="upass"></p>
                            </div>
                            <div class="auth-form__group">
                                <input id="confirm" type="password" class="auth-form__input"
                                    placeholder="Confirm password">
                                <p class="uconfirm"></p>
                            </div>
                        </div>
                        <div class="auth-form__aside">
                            <p class="auth-form__policy-text">
                                By registering, you agree to WildGuy about
                                <a href="" class="auth-form__text-link">Terms of Service</a>&
                                <a href="" class="auth-form__text-link">Privacy Policy</a>
                            </p>
                        </div>
                        <div class="auth-form__controls">
                            <button type="submit" class="btn auth-form__controls-back">COME BACK</button>
                            <button type="submit" class="btn btn--primary ">SIGN UP</button>
                        </div>
                    </form>

                </div>
                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fa-brands fa-facebook-square"></i>
                        Connect with Facebook
                    </a>
                    <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fa-brands fa-google"></i>
                        Connect with Google
                    </a>
                </div>
            </div>

            <!-- Login form -->
            <div class="auth-form auth-form__login">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Login</h3>
                        <span class="auth-form__switch-btn auth-form__switch-btn2">Sign Up</span>
                    </div>
                    <form action="" id="login">
                        <div class="auth-form__form">
                            <div class="auth-form__group">
                                <input id="emaill" type="text" class="auth-form__input" placeholder="Email ">
                                <p class="uemaill"></p>
                            </div>
                            <div class="auth-form__group">
                                <input id="passs" type="password" class="auth-form__input" placeholder="Password ">
                                <p class="upasss"></p>
                            </div>

                        </div>
                        <div class="auth-form__aside">
                            <div class="auth-form__help">
                                <a href="" class="auth-form__link auth-form__help">Forgot password</a>
                                <span class="auth-form__help--separate"></span>
                                <a href="" class="auth-form__link">Need help ?</a>
                            </div>
                        </div>
                        <div class="auth-form__controls">
                            <button class="btn auth-form__controls-back">COME BACK</button>
                            <button class="btn btn--primary ">LOGIN</button>
                        </div>
                    </form>
                </div>
                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fa-brands fa-facebook-square"></i>
                        Sign in with Facebook
                    </a>
                    <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fa-brands fa-google"></i>
                        Sign in with Google
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>