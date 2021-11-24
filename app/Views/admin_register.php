<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>ntn.ko</title>

    <link rel="stylesheet" href="/Assets/css/style.css">

    </head>

    <body>
    
    
    <!-- ***** Login Start ***** -->    
    <form action="/admin_register" method="post"> 
    <div class="signup-div">
        <div class="login-form">
            <div class="box-logo">
                <img class="logos" src="/Assets/image/logo ntn.ko.png" alt="">
            </div>
            <h6 style="color: #ffff;" class="sign-up">Khusus admin</h6>
            <div class="form">
                <div class="username">
                    <p class="judul-form">Email</p>
                    <input class="input-signup" type="text" name="email" id="email" value="<?= set_value('email') ?>">
                </div>
                <div class="password">
                    <p class="judul-form">Password</p>
                    <input class="input-signup" type="password" name="password" id="password" value="">
                </div>
                <div class="password">
                    <p class="judul-form">Repeat Password</p>
                    <input class="input-signup" type="password" name="password_confirm" id="password_confirm" value="">
                </div>
                <?php if(isset($validation)) : ?>
                    <div class="sign-in" role="alert">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php endif; ?>
                <div class="check-remember-username">
                    <label>
                        <input type="checkbox">
                        <span class="remember-username">  </span>Saya sudah membaca <a href="syarat.html">syarat dan ketentuan</a>
                    </label>
                </div>
            </div> 
            <div class="sign-in">
                <button type="submit" class="signin-btn"><label class="signin-font">Daftar</label></button>
            </div>
        </div>
    </div>
    </form>

    

    <!-- ***** Login End ***** -->
    </body>
</html>