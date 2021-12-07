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
            <form method="post" action="/dashboard/update">
                    <div class="row mt-6">
                        <div class="col">
                            <label for="judul" class="form-label">Judul VOD</label>
                            <input type="text" id="judul" name="judul_vod" class="form-control" value="<?= $vod->judul_vod ?>">
                        </div>
                        <div class="col">
                            <label for="link" class="form-label">Link VOD</label>
                            <input type="text" id="link" name="vod_link" class="form-control" value="<?= $vod->vod_link ?>">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for="jenis">Jenis VOD</label>
                            <select name="jenis_vod" id="jenis" class="form-select">
                                <option value="Drama" <?php if ($vod->jenis_vod == "Drama") echo "selected" ?> >Drama</option>
                                <option value="Film" <?php if ($vod->jenis_vod == "Film") echo "selected" ?>>Film</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="genre">Genre VOD</label>
                            <select name="genre_vod" id="genre" value="<?= $vod->genre_vod ?>" class="form-select">
                                <option value="Action" <?php if ($vod->genre_vod == "Action") echo "selected" ?>>Action</option>
                                <option value="Romance" <?php if ($vod->genre_vod == "Romance") echo "selected" ?>>Romance</option>
                                <option value="Horror" <?php if ($vod->genre_vod == "Horror") echo "selected" ?>>Horror</option>
                                <option value="Thriller" <?php if ($vod->genre_vod == "Thriller") echo "selected" ?>>Thriller</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="rating">Rating VOD</label>
                            <input type="text" class="form-control" id="rating_vod" name="rating_vod" value="<?= $vod->rating_vod ?>">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for="desc">Sinopsis VOD</label>
                            <textarea rows="4" cols="50" id="desc" name="desc_vod" class="form-control"><?= $vod->desc_vod ?></textarea>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-10">
                            <label for="img">Link thumbnail VOD :</label>
                            <input type="text" id="img" name="img_vod" value="<?= $vod->img_vod ?>" class="form-control">
                        </div>
                        <div class="col-2">
                            <label for="id_admin">ID Admin :</label>
                            <input type="text" name="id_admin" value="<?= $vod->id_admin ?>" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <button class="watch-now" type="submit">Update</button>
                        </div>
                    </div>
                    <input type="hidden" name="id_vod" value="<?= $vod->id_vod ?>">
                </form>
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