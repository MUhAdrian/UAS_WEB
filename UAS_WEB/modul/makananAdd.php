<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0 text-center">Tambah Data Daftar Makanan</h4>
        </div>
        <div class="card-body">
            <form method="post" action="?page=makananAddProses">
                <div class="mb-3">
                    <label for="namaMakanan" class="form-label">Nama Makanan</label>
                    <input type="text" class="form-control" id="namaMakanan" name="nama_makanan" placeholder="Masukkan nama makanan" required>
                </div>
                <div class="mb-3">
                    <label for="daerahMakanan" class="form-label">Daerah Makanan</label>
                    <input type="text" class="form-control" id="daerahMakanan" name="daerah_makanan" placeholder="Masukkan daerah asal makanan" required>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" name="submit" class="btn btn-success me-2">Submit</button>
                    <button type="reset" class="btn btn-warning me-2">Reset</button>
                    <button type="button" class="btn btn-secondary" onclick="document.location='?page=makanan'">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
