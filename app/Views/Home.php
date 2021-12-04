<!DOCTYPE html>
<html>
    <head>
        <title>Home Ntn.Ko</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../../assets/stylehome.css">
    </head>

    <body>
        <div class="container">
            <div class="nav" id="nav">
                <img src="../../public/Assets/image/logo ntn.ko.png" alt="" class="nav__logo">
                <!-- <ul class="nav__list">
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Drama Korea</a></li>
                    <li><a href="#">Film Korea</a></li>
                    <li><a href="#">Daftar Saya</a></li>
                </ul> -->
            </div>
                <div class="row">
                    <img class="image-home" src="../../assets/image 5.png">
                    <div>
                        <div>
                            <img class="stars-1" src="../../assets/bintang 1.png">
                            <img class="stars-2" src="../../assets/bintang 1.png">
                            <img class="stars-3" src="../../assets/bintang 1.png">
                            <img class="stars-4" src="../../assets/bintang 1.png">
                            <img class="stars-5" src="../../assets/bintang 1.png">
                        </div>
                        <div class="title-text">
                            <h1>Descendants of the Sun</h1>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                                laboris nisi ut aliquip ex ea commodo consequat.
                            <div class="title-desc">
                                <span class="title-desc-1">Romance</span>
                                <span class="title-desc-2">Action</span>
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
                        <img src="../../assets/images/Goblin.jpg" alt="" class="row__poster row__posterLarge">
                        <img src="../../assets/images/Memories_of_the_alhambra.jpg" class="row__poster row__posterLarge">
                        <img src="../../assets/images/my_name.jpg" alt="" class="row__poster row__posterLarge">
                        <img src="../../assets/images/nevertheless.jpeg" alt="" class="row__poster row__posterLarge">
                        <img src="../../assets/images/record-of-youth.jpeg" class="row__poster row__posterLarge">
                        <img src="../../assets/images/Start_up.jpg" alt="" class="row__poster row__posterLarge">
                        <img src="../../assets/images/sweet-home.jpeg" alt="" class="row__poster row__posterLarge">
                        <img src="../../assets/images/Tomorrow_with_you.jpg" alt="" class="row__poster row__posterLarge">
                        <img src="../../assets/images/Goblin.jpg" alt="" class="row__poster row__posterLarge">
                        <img src="../../assets/images/Memories_of_the_alhambra.jpg" class="row__poster row__posterLarge">
                        <img src="../../assets/images/my_name.jpg" alt="" class="row__poster row__posterLarge">
                        <img src="../../assets/images/nevertheless.jpeg" alt="" class="row__poster row__posterLarge">
                        <img src="../../assets/images/record-of-youth.jpeg" class="row__poster row__posterLarge">
                        <img src="../../assets/images/Start_up.jpg" alt="" class="row__poster row__posterLarge">
                        <img src="../../assets/images/sweet-home.jpeg" alt="" class="row__poster row__posterLarge">
                        <img src="../../assets/images/Tomorrow_with_you.jpg" alt="" class="row__poster row__posterLarge">
                    </div>
                </div>

                <div class="row-poster">
                    <h4 style="color: #fafafa; padding-top: 1em;">Sedang Tren di Ntn.Ko</h4>
                    <div class="row__posters">
                        <img src="../../assets/images/Goblin.jpg" alt="" class="row__poster row__posterLarge">
                        <img src="../../assets/images/Memories_of_the_alhambra.jpg" class="row__poster row__posterLarge">
                        <img src="../../assets/images/my_name.jpg" alt="" class="row__poster row__posterLarge">
                        <img src="../../assets/images/nevertheless.jpeg" alt="" class="row__poster row__posterLarge">
                        <img src="../../assets/images/record-of-youth.jpeg" class="row__poster row__posterLarge">
                        <img src="../../assets/images/Start_up.jpg" alt="" class="row__poster row__posterLarge">
                        <img src="../../assets/images/sweet-home.jpeg" alt="" class="row__poster row__posterLarge">
                        <img src="../../assets/images/Tomorrow_with_you.jpg" alt="" class="row__poster row__posterLarge">
                        <img src="../../assets/images/Goblin.jpg" alt="" class="row__poster row__posterLarge">
                        <img src="../../assets/images/Memories_of_the_alhambra.jpg" class="row__poster row__posterLarge">
                        <img src="../../assets/images/my_name.jpg" alt="" class="row__poster row__posterLarge">
                        <img src="../../assets/images/nevertheless.jpeg" alt="" class="row__poster row__posterLarge">
                        <img src="../../assets/images/record-of-youth.jpeg" class="row__poster row__posterLarge">
                        <img src="../../assets/images/Start_up.jpg" alt="" class="row__poster row__posterLarge">
                        <img src="../../assets/images/sweet-home.jpeg" alt="" class="row__poster row__posterLarge">
                        <img src="../../assets/images/Tomorrow_with_you.jpg" alt="" class="row__poster row__posterLarge">
                    </div>
                </div>

        </div>
        <a href="/logout" >logout</a>
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