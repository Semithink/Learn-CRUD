<?php

include 'D:/xampp/htdocs/crud-php/layout/header.php';

$data_barang = select("SELECT * FROM barang");

?>
<!-- ISI -->
<div class="container mt-5">
    <h1>Admin barang</h1>
    <hr>
    <!-- TAMBAH BARANG -->
    <a href="tambah-barang.php" class="btn btn-primary"> Tambah Barang</a>
    <!-- TAMBAH BARANG END -->
    <!-- TABEL END -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">nama</th>
                <th scope="col">jumlah</th>
                <th scope="col">harga</th>
                <th scope="col">tanggal</th>
                <th scope="col">aksi</th>
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
                <td>
                    <button type="button" class="btn btn-success">Edit</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <!-- TABEL END -->
</div>
<!-- ISI END -->

<?php
include 'D:/xampp/htdocs/crud-php/layout/footer.php';
?>