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
        <div style="color: #F7971D; padding-top: 15em; padding-bottom: 15em;" class="container">
            <div class="row mt-12">
            <form method="post" action="/save">
                    <div class="row mt-6">
                        <div class="col">
                            <label for="judul" class="form-label">Judul VOD</label>
                            <input type="text" id="judul" name="judul" class="form-control" placeholder="Masukkan judul VOD">
                        </div>
                        <div class="col">
                            <label for="link" class="form-label">Link VOD</label>
                            <input type="text" id="link" name="link" class="form-control" placeholder="Masukkan link VOD">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for="jenis">Jenis VOD</label>
                            <select name="jenis" id="jenis" class="form-select">
                                <option value="">- Pilih Jenis VOD -</option>
                                <option value="Drama">Drama</option>
                                <option value="Film">Film</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="genre">Genre VOD</label>
                            <select name="genre" id="genre" class="form-select">
                                <option value="">- Pilih Genre VOD -</option>
                                <option value="Action">Action</option>
                                <option value="Romance">Romance</option>
                                <option value="Horror">Horror</option>
                                <option value="Thriller">Thriller</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="rating">Rating VOD</label>
                            <input type="text" class="form-control" id="rating" name="rating" placeholder="Rating VOD (maks. 5)">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for="desc">Sinopsis VOD</label>
                            <textarea rows="4" cols="50" id="desc" name="desc" class="form-control" placeholder="Masukkan sinopsis VOD"></textarea>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for="img">Select thumbnail VOD :</label>
                            <input type="file" id="img" name="img" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <button class="watch-now" type="submit">Save</button>
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