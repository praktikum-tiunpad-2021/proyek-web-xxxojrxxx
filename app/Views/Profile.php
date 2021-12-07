<!DOCTYPE html>
<html>
    <head>
        <title>User Profile</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/Assets/assets/stylevideo.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="container no-padding">
        <div class="nav" id="nav">
                    <ul>
                        <li style="float: left;"><a href="/dashboard"><img src="/Assets/image/logo ntn.ko.png" alt="logo.png" class="nav__logo"></a></li>
                        <li style="float: right;"><a href="/dashboard/profile/<?= session()->get('id'); ?>"><img src="/Assets/assets/images/profile.png" alt="" class="nav__avatar"></a></li>
                        <li style="float: right;"><a href="/logout" class="nav__logout">Logout</a></li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="profile">
                            <img src="/Assets/assets/images/profile.png" alt="" class="profile__pic">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="profileid">
                            <table>
                                <tr>
                                    <td class="tabel-col-1"><strong>Username</strong></td>
                                    <td class="tabel-col-2">:</td>
                                    <td><?= $user->username ?></td>
                                </tr>
                                <tr>
                                    <td class="tabel-col-1"><strong>Email</strong></td>
                                    <td class="tabel-col-2">:</td>
                                    <td><?= $user->email ?></td>
                                </tr>
                                <tr>
                                    <td class="tabel-col-1"><strong>No. HP</strong></td>
                                    <td class="tabel-col-2">:</td>
                                    <td><?= $user->telp ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="/dashboard"><button class="edit-account">Back</button></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                        
                    </div>
        </div>
    <script>
        const nav = document.getElementById('nav');

        window.addEventListener('scroll', () => {
            if (window.scrollY >=100){
                nav.classList.add('nav__black');
            }else{
                nav.classList.remove('nav__black');
            }
        })
    </script>

    </body>
</html>