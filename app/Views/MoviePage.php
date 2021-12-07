<!DOCTYPE html>
<html>
    <head>
        <title><?= $vod->judul_vod; ?></title>
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
                <div class="video">
                    <iframe width="1320" height="705" src="<?= $vod->vod_link; ?>" class="video_preview" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <img class="video_thumbnail" src="<?= $vod->img_vod; ?>">
                </div>
                <div class="col-10">
                    <div class="desc">
                        <h1><?= $vod->judul_vod; ?></h1>
                        <div class="row">
                            <div style="padding-bottom: 4em;" class="col-11">
                                <p style="text-align: justify;"><?= $vod->desc_vod; ?></p>
                                <strong>Jenis : <?= $vod->jenis_vod; ?></strong><br/>
                                <strong>Genre : <?= $vod->genre_vod; ?></strong><br/>
                                <strong>Ntn.Ko rating : <?= $vod->rating_vod; ?></strong>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- footer -->
            <div class="footer">
                <div class="footer-content">
                    <h3>
                        <img src="/Assets/image/logo ntn.ko.png">
                        | Ntn.Ko
                    </h3>
                    <p>Ntn.Ko hadir sebagai Platform bagi para pecinta entertainment Korea dengan 
                        menyediakan berbagai Drama dan Film Korea berbahasa Indonesia.</p>
                    <ul class="socials">
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">LinkedIn</a></li>
                    </ul>
                </div>
                <div class="footer-bottom">
                    ntnko.com | Copyright &copy; 2021 Ntn.Ko
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