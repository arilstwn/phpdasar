<?php
include 'connect.php';
// code for get id from param 
$id = $_GET['id'];
// code for get data siswa by id param
$get_data =  "select * from siswa where id_siswa=$id";
$result_data = mysqli_query($conn, $get_data);
$row = mysqli_fetch_assoc($result_data);
$nama_siswa = $row['nama_siswa'];
$nisn = $row['nisn'];
$gender = $row['gender'];

// code for update data siswa
if (isset($_POST['submit'])) {
    $input_nama_siswa = $_POST['nama'];
    $input_nisn = $_POST['nisn'];
    $input_gender = $_POST['gender'];
    $input_id_kelas = $_POST['id_kelas'];
    $aql = "update siswa set id_siswa id=$id, nama_siswa='$input_nama_siswa', gender='$input_gender', nisn='$input_nisn', id_kelas='$input_id_kelas' where id_siswa=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('lacation:siswa.php');
    } else {
        die($conn->connect_error);
    }
}
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
          background-image: url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiartVzNM1CcXuUUsz0ZqB0UBhELGwYK0X8QItRzJrXCNpYTyRgORl8AUYGaDmI26_Q91cWbTIg2RGDADHLHHJEJ-F3dl4XgT7FVrL1zQT4f-UwbqbuFS64OsZ7GLalBMMbJg5kTSbbLTCtCqVRklxjj19ZfRf0z1n_tvRwWsCSW2dxTaeSHDqi1BBS/w1200-h630-p-k-no-nu/maxresdefault%20%283%29.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
        }
       </style>
<form method="post" class="row">
            <div class="mb-3 col-6">
                <label for="nama" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama_siswa ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="nisn" class="form-label">NISN</label>
                <input type="text" class="form-control" id="nisn" name="nisn" value="<?php echo $nisn ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" class="form-select">
                     <option value="<?php echo $gender ?>" selected><?php echo $gender ?></option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3 col-6">
                <label for="kelas" class="form-label">Kelas</label>
                <select name="id_kelas" class="form-select">
                    <option selected>Pilih Kelas</option>
                    <?php 
                    $sql = "select * from kelas";
                    $result = mysqli_query($conn, $sql);
                    foreach ($result as $row) :
                        ?>
                    <option value="<?= $row['id'] ?>"><?= $row['tingkat_kelas'].' '.$row['jurusan_kelas']; ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    
</body>
</html>