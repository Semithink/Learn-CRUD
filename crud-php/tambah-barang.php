<?php
include 'D:/xampp/htdocs/crud-php/layout/header.php';

// <!-- Cek tombol ketika ditekan -->
if (isset($_POST['tambah'])) {
    if (create_barang($_POST) > 0) {
        echo "<script>alert('Data barang berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>alert('Data barang gagal ditambahkan');
        document.location.href = 'index.php';
        </script>";
    }
}

?>

<!-- ISI -->
<div class="container mt-5">
    <h1>Tambah Barang</h1>
    <hr>
    <form action="" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukan Barang" required>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah Barang</label>
            <input type="number" class="form-control" id="jumlah" placeholder="Masukan Barang" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">harga Barang</label>
            <input type="number" class="form-control" id="harga" placeholder="Harga Barang" required>
        </div>

        <button type="submit" name="tambah" class="btn btn-primary" style="float: right;">Tambah</button>
    </form>
</div>
<!-- ISI END -->

<?php
include 'D:/xampp/htdocs/crud-php/layout/footer.php';
?>