<?php
include 'D:\xampp\htdocs\crud-php\layout/header.php';
$data_barang = select("SELECT * FROM barang");
?>

<!-- ISI -->
<div class="container mt-5">
    <h1>Data barang</h1>
    <hr>
    <!-- BUTTON -->
    <div>
        <a href="form-tambah.php" class="btn btn-primary">Tambah</a>
    </div>
    <!-- BUTTON END END -->

    <!-- TABEL -->
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;?>
            <?php foreach($data_barang as $barang) : ?>
            <tr>
                <th>
                    <?= $no++; ?>
                </th>
                <td>
                    <?= $barang['nama']; ?>
                </td>
                <td>
                    <?= $barang['jumlah']; ?>
                </td>
                <td>
                    Rp. <?= $barang['harga']; ?>
                </td>
                <td>
                    <?= date('d-m-Y | H:i:s', strtotime($barang['tanggal'])); ?>
                </td>
                <td width="15%">
                    <button type="button" class="btn btn-success">Edit</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- TABEL END -->
</div>
<!-- ISI END -->

<?php
include 'D:\xampp\htdocs\crud-php\layout/footer.php';
?>