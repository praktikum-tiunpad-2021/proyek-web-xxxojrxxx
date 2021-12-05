<!DOCTYPE html>
<html>
    <head>
        <title>Home Ntn.Ko</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/Assets/assets/stylevideo.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="container no-padding">
            <div class="row">
                <div class="nav" id="nav">
                <img src="/Assets/image/logo ntn.ko.png" alt="logo.png" class="nav__logo">
                <a href="/logout" >logout</a>
                <img src="/Assets/assets/images/profile.png" alt="" class="nav__avatar">
                </div>
            </div>

            <div class="row">
                <div class="video">
                    <iframe width="1320" height="705" src="https://www.youtube.com/embed/wkHjOTFv60g" class="video_preview" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <img class="video_thumbnail" src="/Assets/assets/images/video1.png">
                </div>
                <div class="col-10">
                    <div class="desc">
                        <h1>Descendants of the Sun</h1>
                        <div class="row">
                            <div class="col-10">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                                laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <strong>Jenis : </strong><br/>
                                <strong>Genre : </strong><br/>
                                <strong>Ntn.Ko rating : </strong>
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