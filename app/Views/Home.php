<!DOCTYPE html>
<html>
    <head>
        <title>Home Ntn.Ko</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/Assets/assets/stylehome.css">
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
                    <img class="image-home" src="/Assets/assets/image 5.png">
                    <div>
                        <div>
                            <img class="stars-1" src="/Assets/assets/bintang 1.png">
                            <img class="stars-2" src="/Assets/assets/bintang 1.png">
                            <img class="stars-3" src="/Assets/assets/bintang 1.png">
                            <img class="stars-4" src="/Assets/assets/bintang 1.png">
                            <img class="stars-5" src="/Assets/assets/bintang 1.png">
                        </div>
                        <div class="title-text">
                            <h1>Descendants of the Sun</h1>
                            A soldier belonging to the South Korean Special Forces falls in 
                            love with a beautiful surgeon. However, their relationship is 
                            short-lived as their professions keep them apart.
                            <div class="title-desc">
                                <span class="title-desc-1">Romance</span>
                                <!-- <span class="title-desc-2">Action</span> -->
                            </div>
                            <div class="play-button">
                                <button class="watch-now">Watch Now</button>
                            </div>
                        </div>
                        <div class="fade-bottom"></div>
                    </div>
                    
                </div>

                <div class="row-poster">
                    <h4 style="color: #fafafa; padding-top: 1em;">Populer di Ntn.Ko</h4>
                    <div class="row__posters">
                        <?php foreach($vod as $row) : ?>
                            <a href="/dashboard/movie_page/<?= $row['id_vod']; ?>"><img src="<?= $row['img_vod']; ?>" class="row__poster row__posterLarge"></a>
                        <?php endforeach;?>
                    </div>
                </div>

                <div class="row-poster">
                    <h4 style="color: #fafafa; padding-top: 1em;">Sedang Tren di Ntn.Ko</h4>
                    <div class="row__posters">
                        <img src="/Assets/assets/images/Goblin.jpg" alt="" class="row__poster row__posterLarge">
                        <img src="/Assets/assets/images/Memories_of_the_alhambra.jpg" class="row__poster row__posterLarge">
                        <img src="/Assets/assets/images/my_name.jpg" alt="" class="row__poster row__posterLarge">
                        <img src="/Assets/assets/images/nevertheless.jpeg" alt="" class="row__poster row__posterLarge">
                        <img src="/Assets/assets/images/record-of-youth.jpeg" class="row__poster row__posterLarge">
                        <img src="/Assets/assets/images/Start_up.jpg" alt="" class="row__poster row__posterLarge">
                        <img src="/Assets/assets/images/sweet-home.jpeg" alt="" class="row__poster row__posterLarge">
                        <img src="/Assets/assets/images/Tomorrow_with_you.jpg" alt="" class="row__poster row__posterLarge">
                        <img src="/Assets/assets/images/Goblin.jpg" alt="" class="row__poster row__posterLarge">
                        <img src="/Assets/assets/images/Memories_of_the_alhambra.jpg" class="row__poster row__posterLarge">
                        <img src="/Assets/assets/images/my_name.jpg" alt="" class="row__poster row__posterLarge">
                        <img src="/Assets/assets/images/nevertheless.jpeg" alt="" class="row__poster row__posterLarge">
                        <img src="/Assets/assets/images/record-of-youth.jpeg" class="row__poster row__posterLarge">
                        <img src="/Assets/assets/images/Start_up.jpg" alt="" class="row__poster row__posterLarge">
                        <img src="/Assets/assets/images/sweet-home.jpeg" alt="" class="row__poster row__posterLarge">
                        <img src="/Assets/assets/images/Tomorrow_with_you.jpg" alt="" class="row__poster row__posterLarge">
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