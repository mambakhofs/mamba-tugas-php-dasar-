<?php
if (!isset($_POST['nama']) || !isset($_POST['kelas']) || !isset($_POST['pesan'])){
    header("Location: form_pesan.php");
    exit;
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pesan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="p-4">

    <div class="card col-md-6 mx-auto">
        <div class="card-header">
            <h4 class="mb-0">Pesan Berhasil dikirim!</h4>
            <p>Terima kasih, <?= $_POST['nama'] ?>!</p>
        </div>
        <div class="card-body">
            <table class="table table-borderless">
                <tr>
                    <th width="30%">Nama</th>
                    <td>: <?= $_POST['nama'] ?></td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>: <?= $_POST['kelas'] ?></td>
                </tr>
                <tr>
                    <th>Pesan / Kesan</th>
                    <td>: <?= $_POST['pesan'] ?></td>
                </tr>
            </table>
            <a href="index.php" class="btn btn-info text-white">Kembali ke Data Mahasiswa</a>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>