<?php include( 'connect.php' ) ?>
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
          background-image: url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiartVzNM1CcXuUUsz0ZqB0UBhELGwYK0X8QItRzJrXCNpYTyRgORl8AUYGaDmI26_Q91cWbTIg2RGDADHLHHJEJ-F3dl4XgT7FVrL1zQT4f-UwbqbuFS64OsZ7GLalBMMbJg5kTSbbLTCtCqVRklxjj19ZfRf0z1n_tvRwWsCSW2dxTaeSHDqi1BBS/w1200-h630-p-k-no-nu/maxresdefault%20%283%29.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
        }
       </style>
</head>
<body class = 'min-vh-100 d-flex align-items-center'>
<div class = 'card w-100 m-auto p-3'>
<h3 class = 'text-center' >ここにお願いします>_<</h3>
<!-- <button <a herf="create.php" >nisa</button> -->
<a href="pdi.php"></a>
<table class = 'table  table-striped'>
<thead>
<tr>

<th scope = 'col'>No</th>
<th scope = 'col'>Nama Siswa</th>   
<th scope = 'col'>NISN</th>
<th scope = 'col'>Gender</th>
<th scope = 'col'>Kelas</th>
<th scope = 'col'>Nama Sekolahan</th>

</tr>
</thead>
<tbody classs = 'table-grup-divider'>
<?php
$sql = 'select * from siswa INNER JOIN kelas ON siswa.id_kelas = kelas.id';
$result = mysqli_query( $conn, $sql );
$no = 1;
foreach ($result as $row) :
    ?>

            <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama_siswa']; ?></td>
            <td><?= $row['nisn']; ?></td>
            <td><?= $row['gender']; ?></td>
            <td><?= $row['tingkat_kelas'].' '.$row['jurusan_kelas']; ?></td>
            <td><?= $row['jurusan_kelas'].' '.$row['nama_sekolah']; ?></td>
            <td class="text-center">
            </td>
            </tr>
            <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html