<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">Perpus40</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item mx-2">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#">Daftar Buku</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <?php  Flasher::flash();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h1>Daftar Siswa</h1>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah data Siswa</button>
            <br><br>
            <table border="1" cellpadding="10">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>id</th>
                        <th>nama</th>
                        <th>alamat</th>
                        <th>email</th>
                        <th>Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                    <?php $i = 1 ?>
                    <?php foreach ($data['mhs'] as $mhs) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $mhs["id"]; ?></td>
                            <td><?= $mhs["nama"]; ?></td>
                            <td><?= $mhs["alamat"]; ?></td>
                            <td><?= $mhs["email"]; ?></td>
                            <td><?= $mhs["jurusan"]; ?></td>
                            <td><a href="<?= BASEURL; ?>/siswa/hapus/<?=$mhs['id'];?>" class="badge bg-danger" onclick="return confirm('yakin);">hapus</a></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </thead>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL;?>/siswa/tambah" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <label for="jurusan">Jurusan</label>
                    <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                        <option value="RPL">RPL</option>
                        <option value="MM">MM</option>
                        <option value="OTKP">OTKP</option>
                    </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </div>
    </div>
</div>