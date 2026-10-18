<?php
if (
    isset($_GET["nim"]) AND
    isset($_GET["nama"]) AND
    isset($_GET["jurusan"]) AND
    isset($_GET["email"]) AND
    isset($_GET["nilai"]) AND
    isset($_GET["grade"]) AND
    isset($_GET["status"])
) {
    $nim     = $_GET["nim"];
    $nama    = $_GET["nama"];
    $jurusan = $_GET["jurusan"];
    $email   = $_GET["email"];
    $nilai   = $_GET["nilai"];
    $grade   = $_GET["grade"];
    $status  = $_GET["status"];
} else {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
   <body class="p-4">

    <div class="card col-md-6 mx-auto">
        <div class="card-header">
            <h4 class="mb-0">Detail Mahasiswa</h4>
        </div>
        <div class="card-body">
            <table class="table table-borderless">
                <tr>
                    <th width="30%">NIM</th>
                    <td>: <?= $_GET["nim"] ?? '-' ?></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>: <?= $_GET["nama"] ?? '-' ?></td>
                </tr>
                <tr>
                    <th>Jurusan</th>
                    <td>: <?= $_GET["jurusan"] ?? '-' ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>: <?= $_GET["email"] ?? '-' ?></td>
                </tr>
                <tr>
                    <th>Nilai</th>
                    <td>: <?= $_GET["nilai"] ?? '-' ?></td>
                </tr>
                <tr>
                    <th>Grade</th>
                    <td>: <?= $_GET["grade"] ?? '-' ?></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>: <?= $_GET["status"] ?? '-' ?></td>
                </tr>
            </table>
            <a href="index.php" class="btn btn-success text-white">Kembali</a>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>