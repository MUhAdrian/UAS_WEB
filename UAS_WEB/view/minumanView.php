<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Minuman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h2 class="mb-0">Data Minuman</h2>
                <a href="?page=minumanAdd" class="btn btn-light btn-sm text-primary fw-bold">+ Tambah Data Baru</a>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" id="searchBox" class="form-control" placeholder="Cari data minuman..." />
                            <button class="btn btn-outline-primary">Search</button>
                        </div>
                    </div>
                </div>
                <table id="dataTable" class="table table-striped table-hover table-bordered">
                    <thead class="table-success">
                        <tr>
                            <th>No</th>
                            <th>Nama Minuman</th>
                            <th>Daerah Minuman</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "includes/config.php";
                        $query = "SELECT * FROM tbl_minuman ORDER BY id_minuman ASC";
                        $sql = mysqli_query($conn, $query);
                        $nomor = 1;
                        if (mysqli_num_rows($sql) == 0) { ?>
                            <tr>
                                <td colspan="4" class="text-center"><i>No data</i></td>
                            </tr>
                        <?php } else {
                            while ($data = mysqli_fetch_array($sql)) { ?>
                                <tr>
                                    <td class="text-center"><?= $nomor++; ?></td>
                                    <td><?= $data["nama_minuman"] ?></td>
                                    <td><?= $data["daerah_minuman"] ?></td>
                                    <td class="text-center">
                                        <a href="?page=minumanUpdate&id=<?= $data['id_minuman']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="?page=minumanDelete&id=<?= $data['id_minuman']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                            <?php } 
                        } ?>
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
