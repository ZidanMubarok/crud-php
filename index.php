<?php
// Include file conect
include "conect.php";
$query = "SELECT * FROM reg";
$result = $con->query($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran</title>
    <!-- link bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <?php include "layouts/nav.php"; ?>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="d-flex justify-content-between border-bottom py-2">
            <h3 class="pb-2 mb-0">Data Pegawai</h3>
            <a href="tambah_data.php" class="btn btn-success">+ Tambah Data</a>
        </div>
        <div class="pt-3 table-responsive">
            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Reg_Time</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 0;
                    while ($row = mysqli_fetch_array($result)) {

                    ?>
                        <tr>
                            <td><?= $no + 1; ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['contact']; ?></td>
                            <td><?= $row['email']; ?></td>
                            <td><?= $row['gender']; ?></td>
                            <td><?= $row['city']; ?></td>
                            <td><?= $row['country']; ?></td>
                            <td><?= $row['reg_time']; ?></td>
                            <td>
                                <a class="btn btn-warning" href="edit.php?id=<?= $row['id']; ?>">Edit</a>
                                <a class="btn btn-danger" href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php
                        $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Content end -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>