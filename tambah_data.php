<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <?php include "layouts/nav.php"; ?>
    <!-- Form Registrasi -->
    <!-- Content -->
    <div class="my-5 p-3 bg-body rounded shadow-sm">
        <div class="d-flex justify-content-between border-bottom py-2">
            <h3 class="pb-2 mb-0">Tambah Data </h3>
            <a href="/uasgui/index.php" class="btn btn-primary"><- Kembali</a>
        </div>
        <div class="pt-3 mt-5">
            <form action="/uasgui/create.php" method="POST">
                <div class="mb-3">
                    <label for="title" class="form-label">Name Student</label>
                    <input type="text" class="form-control" id="title" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="no" class="form-label">Contact student :</label>
                    <input class="form-control" type="number" id="no" name="contact" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Student :</label>
                    <input class="form-control" type="email" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">Student City :</label>
                    <select class="form-select" aria-label="Default select example" name="city">
                        <option value="Nganjuk">Nganjuk</option>
                        <option value="Kediri">Kediri</option>
                        <option value="Jombang">Jombang</option>
                        <option value="Malang">Malang</option>
                        <option value="Surabaya">Surabaya</option>
                        <option value="Jakarta">Jakarta</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender Student :</label>
                    <select class="form-select" aria-label="Default select example" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="state" class="form-label">Student country :</label>
                    <select class="form-select" aria-label="Default select example" name="country">
                        <option value="Indonesia">Indonesia</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">+ Tambah Data</button>
            </form>
        </div>
    </div>
    <!-- Content end -->
    <!-- Form Registrasi end -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>