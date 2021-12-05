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
        <div class="container no-padding">
            <div class="card mt-4 mx-4">
                <div class="card-header bg-success text-white">
                    Data Mahasiswa
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>No</th>
                            <th>Judul VOD</th>
                            <th>Nomor Penghargaan</th>
                            <th>Jenis Penghargaan</th>
                            <th>Tanggal Penghargaan</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        $conn = mysqli_connect('localhost', 'root', '', 'tugas-6-prak-pemweb');
                        $select   = "SELECT * FROM penghargaan order by id DESC";
                        $query     = mysqli_query($conn, $select);
                        $urut   = 1;
                        while ($row = mysqli_fetch_array($query)) {
                            $id         = $row['id'];
                            $nama       = $row['nama'];
                            $nomor      = $row['nomor'];
                            $jenis      = $row['jenis'];
                            $tanggal    = $row['tanggal'];
                        ?>
                            <tr>
                                <td><?php echo $urut++ ?></td>
                                <td><?php echo $nama ?></td>
                                <td><?php echo $nomor ?></td>
                                <td><?php echo $jenis ?></td>
                                <td><?php echo $tanggal ?></td>
                                <td>
                                    <a href="/penghargaan/edit/<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="/penghargaan/delete/<?php echo $id ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><button type="button" class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
            <!-- Akhir Tabel -->
        </div>
        <div class="container-fluid mt-4">
            <a class="btn btn-warning mx-4" href="/penghargaan/add_new/">Tambah</a>
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