<?php
require "includes/config.php";
//ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$query = "SELECT * FROM tbl_makanan WHERE id_makanan=$id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);
// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($sql) < 1) {
    die("Data tidak ditemukan...");
}
?>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0 text-center">Update Data Daftar Makanan</h4>
        </div>
        <div class="card-body">
            <form method="post" action="?page=makananUpdateProses">
                <!-- menampung nilai id yang akan di edit -->
                <input type="hidden" name="id" value="<?= $data['id_makanan'] ?>" />
                
                <div class="mb-3">
                    <label for="namaMakanan" class="form-label">Nama Makanan</label>
                    <input type="text" class="form-control" id="namaMakanan" name="nama_makanan" 
                           value="<?= $data['nama_makanan'] ?>" required>
                </div>
                
                <div class="mb-3">
                    <label for="daerahMakanan" class="form-label">Daerah Makanan</label>
                    <input type="text" class="form-control" id="daerahMakanan" name="daerah_makanan" 
                           value="<?= $data['daerah_makanan'] ?>" required>
                </div>
                
                <div class="d-flex justify-content-end">
                    <button type="submit" name="update" class="btn btn-success me-2">Update</button>
                    <button type="button" class="btn btn-secondary" 
                            onclick="document.location='?page=makanan'">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
