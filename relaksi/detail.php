<?php
include 'connect.php';
$id = $_GET['id'];
$get_data = "select * from siswa where id_siswa=$id";
$result_data = mysqli_query($conn, $get_data);
$siswa = mysqli_fetch_assoc($result_data);
$nama_siswa = $siswa['nama_siswa'];
$nisn  = $siswa['nisn'];
$gender = $siswa['gender'];

$id_kelas = $siswa['id_kelas'];
$get_data_kelas = "select * from kelas where id=$id_kelas";
$result_data_kelas = mysqli_query($conn, $get_data_kelas);
$kelas = mysqli_fetch_assoc($result_data_kelas);
$tingkat_kelas = $kelas['tingkat_kelas'];
$jurusan_kelas = $kelas['jurusan_kelas'];
?>

<!DOCTYPE html>
<html lang = 'en'>

<head>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>記入してください、兄弟</title>
<link href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css' rel = 'stylesheet'
integrity = 'sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9' crossorigin = 'anonymous'>
<script src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js'
integrity = 'sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm' crossorigin = 'anonymous'>
</script>
<style>
        body {
          background-image: url('https://cdn-www.bluestacks.com/bs-images/3882_Blue-Archive_Tier-List.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
        }
       </style>
</head>
<body class = 'min-vh-100 d-flex align-items-center'>
<div class = 'card w-100 m-auto p-3'>
<h3 class = 'text-center' >Detail Siswa</h3>
<div class="row mt-3">
  <div class="col-4">
    <span class="fw-bold">Nama Siswa</span>
  </div>
  <div class="col-8">
    <?php echo $nama_siswa ?>
  </div>
  <hr class="mt-3">
  <div class="col-4">
    <span class="fw-bold">NISN</span>
  </div>
  <div class="col-8">
     <?php echo $nisn ?>
  </div>
  <hr class="mt-3">
  <div class="col-4">
    <span class="fw-bold">Gender</span>
  </div>
  <div class="col-8">
     <?php echo $gender ?>
  </div>
  <hr class="mt-3">
  <div class="col-4">
    <span class="fw-bold">Kelas</span>
  </div>
  <div class="col-8">
     <?php echo $tingkat_kelas.' '.$jurusan_kelas ?>
  </div>
   <div class="col-8">
    <a href="<?= 'update.php?id='.$id; ?>" class="btn btn-sm btn-primary">Update</a>
   </div>
  </div>
</body>
</html