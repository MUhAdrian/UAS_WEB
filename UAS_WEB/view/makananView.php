<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Makanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h2 class="mb-0">Data Makanan</h2>
                <a href="?page=makananAdd" class="btn btn-light btn-sm text-primary fw-bold">+ Tambah Data Baru</a>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" id="searchBox" class="form-control" placeholder="Cari data makanan..." />
                            <button class="btn btn-outline-primary">Search</button>
                        </div>
                    </div>
                </div>
                <table id="dataTable" class="table table-striped table-hover table-bordered">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Nama Makanan</th>
                            <th>Daerah Makanan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "includes/config.php";
                        $query = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC";
                        $sql = mysqli_query($conn, $query);
                        $nomor = 1;
                        while ($data = mysqli_fetch_array($sql)) { ?>
                            <tr>
                                <td class="text-center"><?= $nomor++; ?></td>
                                <td><?= $data["nama_makanan"] ?></td>
                                <td><?= $data["daerah_makanan"] ?></td>
                                <td class="text-center">
                                    <a href="?page=makananUpdate&id=<?= $data['id_makanan']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="?page=makananDelete&id=<?= $data['id_makanan']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="text-end mt-3">
                    <p class="text-muted">Total data: <?= mysqli_num_rows($sql) ?></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
</body>
</html>
