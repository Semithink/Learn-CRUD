<?php
include 'D:\xampp\htdocs\crud-php\layout/header.php';

// Cek tombol ketika ditekan
// if (isset($_POST['tambah'])) {
//     if (create_barang($_POST) > 0) {
//         echo "<script>alert('Data barang berhasil ditambahkan');
//         document.location.href = 'index.php';
//         </script>";
//     } else {
//         echo "<script>alert('Data barang gagal ditambahkan');
//         document.location.href = 'index.php';
//         </script>";
//     }
// }


?>

<!-- ISI -->
<div class="container mt-5">
    <h1>Tambah barang</h1>
    <hr>

    <!-- FORM -->
    <form action="" method="POST">
        <!-- f1 -->
        <div class="mb-3">
            <label for="nama" class="form-label">Nama barang</label>
            <input type="text" class="form-control" id="nama" nama="nama" placeholder="Masukan Barang">
        </div>
        <!-- f1 end -->
        <!-- f2 -->
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah Barang</label>
            <input type="number" class="form-control" id="jumlah" nama="jumlah" placeholder="Masukan Jumlah">
        </div>
        <!-- f2 end -->
        <!-- f3 -->
        <div class="mb-3">
            <label for="Harga" class="form-label">Harga barang</label>
            <input type="number" class="form-control" id="harga" nama="harga" placeholder="Masukan Harga">
        </div>
        <!-- f3 end -->
        <button type="submit" name="tambah" class="btn btn-warning" style="float: right;">Tambah</button>
    </form>
    <!-- FORM END -->
</div>
<!-- ISI END -->


<?php
include 'D:\xampp\htdocs\crud-php\layout/footer.php';
?>