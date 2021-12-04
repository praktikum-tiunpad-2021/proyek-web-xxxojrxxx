<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ntn.ko</title>
    <link rel="stylesheet" href="/Assets/css/style.css">
</head>

    <body>
        <?php if(session()->get('success')) : ?>
            <div role="alert">
                <?= session()->get('success') ?>
            </div>
        <?php endif; ?>
    <!-- ***** Login Start ***** -->    
    <form action="/" method="post"> 
        
    <div class="login-div">
        <div class="login-form">
            <div class="box-logo">
                <img class="logos" src="/Assets/image/logo ntn.ko.png" alt="">
            </div>
            <div class="form">
                <div class="username">
                    <p class="judul-form">Email</p>
                    <input class="input-login" type="text" name="email" id="email" value="<?= @$_COOKIE['email'] ?>">
                </div>
                <div class="password">
                    <p class="judul-form">Password</p>
                    <input class="input-login" type="password" name="password" id="password" value="<?= @$_COOKIE['password'] ?>">
                </div>
                <div class="check-remember-username">
                    <label>
                        <input type="checkbox" id="remember" name="remember" value="pw">
                        <span class="remember-username">  </span>Remember Username?
                    </label>
                </div>
            </div> 
            <?php if(isset($validation)) : ?>
                <div class="sign-up" role="alert">
                    <?= $validation->listErrors() ?>
                </div>
            <?php endif; ?>
            <div class="sign-up">
                <p style="color: #ffff;">Tidak punya akun ?<a href="/register" class="register-btn"> Buat Akun</a></p>
            </div>
            <div class="sign-up">
                <a href="/admin" class="register-btn"> Admin?</a></p>
            </div>
            <div class="sign-in">
                <button type="submit" class="signin-btn"><label class="signin-font">Masuk</label></button>
            </div>
        </div>
    </div>
    </form>

    

    <!-- ***** Login End ***** -->
    </body>
</html>