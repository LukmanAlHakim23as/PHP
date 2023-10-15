<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h1>Daftar Siswa</h1>
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
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </thead>
            </table>
        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h1>Tambah Data Siswa</h1>
            <form action="<?= BASEURL; ?>/siswa/tambah" method="post">
                <ul>
                    <li>
                        <label for="nama">Nama:</label>
                        <input type="text" name="nama" id="nama">
                    </li>
                    <li>
                        <label for="alamat">Alamat:</label>
                        <input type="text" name="alamat" id="alamat">
                    </li>
                    <li>
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email">
                    </li>
                    <li>
                        <label for="jurusan">Jurusan:</label>
                        <input type="text" name="jurusan" id="jurusan">
                    </li>
                    <li>
                        <button type="submit" name="submit">Tambah Data</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>