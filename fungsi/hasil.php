
<?php
    // Jika belum mengisi form, maka tidak dapat kehalaman hasil
    if(!isset($_POST['proses'])){
        header("Location: index.php");
        exit;
    }


    // Menyimpan inputan user kedalam variabel
    $nama =$_POST['name'];
    $matkul =$_POST['matkul'];
    $uts =$_POST['nilai_uts'];
    $uas =$_POST['nilai_uas'];
    $tugas =$_POST['nilai_tugas'];

    // Menentukan nilai akhir
    $nilai_akhir = ($uts + $uas + $tugas) / 3;

    // Mengambil sekaligus menjalankan skrip di library fungsi untuk mencetak kelulusan dan grade
    require_once 'libfungsi.php';
    $_nilai = $nilai_akhir;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Mata Kuliah</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">TUGAS</th>
      <th scope="col">NILAI AKHIR</th>
      <th scope="col">GRADE</th>
      <th scope="col">KETERANGAN</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td><?= $nama ?></td>
      <td><?= $matkul ?></td>
      <td><?= $uts ?></td>
      <td><?= $uas ?></td>
      <td><?= $tugas ?></td>
      <td><?= $nilai_akhir ?></td>
      <td><?= grade($_nilai) ?></td>
      <td><?= kelulusan($_nilai) ?></td>
    </tr>
  </tbody>
</table>
</body>
</html>