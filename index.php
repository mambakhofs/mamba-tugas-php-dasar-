<?php
$mahasiswa = [
 ["nim" => "25001",
  "nama" => "Andi Pratama", 
  "jurusan" => "Pendidikan Sistem dan Teknologi Informasi", 
  "email" => "andi@upi.edu", 
  "nilai" => 88 
  ], 
  ["nim" => "25002",
  "nama" => "Kim Ryul", 
  "jurusan" => "FTTM", 
  "email" => "ryul@upi.edu", 
  "nilai" => 67 
  ], 
  ["nim" => "25003",
  "nama" => "Kwon Ohyul", 
  "jurusan" => "Bisnis Digital", 
  "email" => "ohyul@upi.edu", 
  "nilai" => 75
  ], 
  ["nim" => "25004",
  "nama" => "Jung Woojin", 
  "jurusan" => "Desain dan Seni Rupa", 
  "email" => "woojin@upi.edu", 
  "nilai" => 80 
  ], 
  ["nim" => "25005",
  "nama" => "Louise Bonjour", 
  "jurusan" => "Bahasa Prancis", 
  "email" => "louise@upi.edu", 
  "nilai" => 65
  ], 
]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   <div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="mb-0">Daftar Mahasiswa</h3>
    <a href="form_pesan.php" class="btn btn-info text-white">Isi Form Pesan</a>
    </div>
    <table class="table">
  <thead>
    <tr>
        <th>No.</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th>Nilai</th>
        <th>Grade</th>
        <th>Status</th>
        <th>Detail</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1 ?>
    <?php foreach($mahasiswa as $data) {

        if($data["nilai"] >=80) {
            $grade = "A";
        } elseif ($data["nilai"] >= 70) {
            $grade = "B";
        } elseif ($data["nilai"] >= 60) {
            $grade = "C";
        }else {
            $grade = "D";
        }


        if($data["nilai"]>=70){
            $status = "Lulus";
        }else {
            $status = "Tidak Lulus";
        }
    ?>

     <tr class="table-warning">
      <td><?= $no ?></td>
      <td><?php echo $data["nim"] ?> </td>
      <td><?php echo $data["nama"] ?> </td>
      <td><?php echo $data["jurusan"] ?> </td>
      <td><?php echo $data["email"] ?> </td>
      <td><?php echo $data["nilai"] ?> </td>
      <td><?= $grade ?> </td>
      <td><?= $status ?> </td>
      <td><a href="detail.php?nama=<?= $data["nama"] ?>&nim=<?= $data ["nim"] ?>&jurusan=<?= $data["jurusan"] ?>&email=<?= $data["email"] ?>&nilai=<?= $data["nilai"] ?>&grade=<?= $grade ?>&status=<?= $status ?>" class="btn btn-danger">Lihat Detail</button></td>
    </tr>

    <?php $no++ ?>
    <?php } ?>
  </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>