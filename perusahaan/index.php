<?php
require_once '../setting/link.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Perusahaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body>
    <div class="container">

        <nav class="navbar navbar-expand-lg bg-body-tertiary mb-2">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Dev</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Data Perusahaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Data Perusahaan</a>
                        </li>
                    </ul>
                    <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                    <a href="#" class="btn btn-outline-success"><i class="fa-solid fa-person"></i></a>
                    

                </div>
            </div>
        </nav>

        <h3 class="alert alert-success"><i class="fa-solid fa-building"></i> Data Perusahaan</h3>

        <div class="table-responsive">

            <table class="table table-bordered table-hover" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Perusahaan</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Perumahan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $sql = "SELECT * FROM perusahaan,perumahan WHERE perusahaan.id=perumahan.perusahaan_id";
                    $query = mysqli_query($koneksi, $sql);
                    while ($data = mysqli_fetch_assoc($query)):
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nama_perusahaan']; ?></td>
                            <td><?= $data['alamat']; ?></td>
                            <td><?= $data['telepon']; ?></td>
                            <td><?= $data['nama_perumahan']; ?></td>
                            <td>
                                <!-- <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-warning"><i
                                        class="fa fa-pencil"></i>Edit</a> -->
                                <a href="delete.php?id=<?= $data['id']; ?>" class="btn btn-danger"
                                    onclick="return confirm('Yakin ingin menghapus data ini?')"><i
                                        class="fa-solid fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        <?php
                    endwhile;
                    ?>
                </tbody>

            </table>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>