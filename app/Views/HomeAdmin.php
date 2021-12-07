<!DOCTYPE html>
<html>
    <head>
        <title>Home Ntn.Ko</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/Assets/assets/styleadmin.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="row mt-4">
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Link</th>
                            <th>Jenis</th>
                            <th>Genre</th>
                            <th>Rating</th>
                            <th>Sinopsis</th>
                            <th>Thumbnail</th>
                            <th style="text-align: center;">Admin</th>
                            <th style="text-align: center;">Action</th>
                        </tr>
                            <?php $no = 1; foreach ($vod as $row) : ?>
                            <tr>
                                <td style="text-align: center;"><?= $no++ ?></td>
                                <td><?= $row['judul_vod'] ?></td>
                                <td><?= $row['vod_link'] ?></td>
                                <td><?= $row['jenis_vod'] ?></td>
                                <td><?= $row['genre_vod'] ?></td>
                                <td><?= $row['rating_vod'] ?></td>
                                <td><?= $row['desc_vod'] ?></td>
                                <td><?= $row['img_vod'] ?></td>
                                <td style="text-align: center;"><?= $row['id_admin'] ?></td>
                                <td style="text-align: center;">
                                    <a class="little-button" href="/dashboard/edit/<?= $row['id_vod']; ?>">Edit</a>
                                    <a class="little-button" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href="/dashboard/delete/<?= $row['id_vod']; ?>"">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                    </table>
            </div>
            <!-- Akhir Tabel -->
        </div>
        <div class="container mt-4">
            <a class="watch-now" href="/add">Tambah</a>
            <a style="margin-left: 60em" class="watch-now" href="/logout">Logout</a>
        </div>
    </body>
</html>