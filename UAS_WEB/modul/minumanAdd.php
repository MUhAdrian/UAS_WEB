<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0 text-center">Tambah Data Daftar Minuman</h4>
        </div>
        <div class="card-body">
            <form method="post" action="?page=minumanAddProses">
                <div class="mb-3">
                    <label for="namaMinuman" class="form-label">Nama Minuman</label>
                    <input type="text" class="form-control" id="namaMinuman" name="nama_minuman" placeholder="Masukkan nama minuman" required>
                </div>
                <div class="mb-3">
                    <label for="daerahMinuman" class="form-label">Daerah Minuman</label>
                    <input type="text" class="form-control" id="daerahMinuman" name="daerah_minuman" placeholder="Masukkan daerah asal minuman" required>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" name="submit" class="btn btn-success me-2">Submit</button>
                    <button type="reset" class="btn btn-warning me-2">Reset</button>
                    <button type="button" class="btn btn-secondary" onclick="document.location='?page=minuman'">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
