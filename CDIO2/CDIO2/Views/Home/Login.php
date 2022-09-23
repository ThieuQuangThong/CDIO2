<?php
    // echo "hello";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="../../style.css">
    <title>Login</title>
</head>
<body>

        <div class="auth-form auth-form__login">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Login</h3>
                        <span class="auth-form__switch-btn auth-form__switch-btn2">
                            <a href="./Signup.php">Sign Up</a>
                        </span>
                    </div>
                    <form action="../../index.php?function=login" enctype="multipart/form-data" method="post" id="login">
                        <div class="auth-form__form">
                            <div class="auth-form__group">
                                <input id="emaill" type="text" name="UserName" class="auth-form__input" placeholder="Email ">
                                <p class="uemaill"></p>
                            </div>
                            <div class="auth-form__group">
                                <input id="passs" type="password" name="Password" class="auth-form__input" placeholder="Password ">
                                <p class="upasss"></p>
                            </div>

                        </div>
                        <div class="auth-form__aside">
                            <div class="auth-form__help">
                                <a href="#" class="auth-form__link auth-form__help">Forgot password</a>
                                <span class="auth-form__help--separate"></span>
                                <a href="#" class="auth-form__link">Need help ?</a>
                            </div>
                        </div>
                        <div class="auth-form__controls">
                            <button class="btn auth-form__controls-back">
                                <a href="./Home_Login.php">COME BACK</a>
                            </button>
                            <button class="btn btn--primary">
                                LOGIN
                            </button>
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
   
</body>
</html>