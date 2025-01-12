<?php
require "includes/config.php";
//ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$query = "SELECT * FROM tbl_minuman WHERE id_minuman=$id";
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
            <h4 class="mb-0 text-center">Update Data Daftar Minuman</h4>
        </div>
        <div class="card-body">
            <form method="post" action="?page=minumanUpdateProses">
                <!-- menampung nilai id yang akan di edit -->
                <input type="hidden" name="id" value="<?= $data['id_minuman'] ?>" />
                
                <div class="mb-3">
                    <label for="namaMinuman" class="form-label">Nama Minuman</label>
                    <input type="text" class="form-control" id="namaMinuman" name="nama_minuman" 
                           value="<?= $data['nama_minuman'] ?>" required>
                </div>
                
                <div class="mb-3">
                    <label for="daerahMinuman" class="form-label">Daerah Minuman</label>
                    <input type="text" class="form-control" id="daerahMinuman" name="daerah_minuman" 
                           value="<?= $data['daerah_minuman'] ?>" required>
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
