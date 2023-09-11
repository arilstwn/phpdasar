<?php
include 'connect.php';
$id = $_GET['id '];
$Unsername =  "select * from pdi where id=$id";
$Nama_waifu = mysqli_query($conn, $get_data);
$row = mysqli_fetch_assoc($result_data);
$Nama_anak = $row['Nama_anak'];
$Nomer_hp = $row['Nomer_hp'];
$NIS = $row['NIS']

if (isset($_POST['submit'])) {
    $id = $_POST['nama'];
    $Unsername = $_POST['Unsername'];
    $Nama_waifu = $_POST['Nama_waifu'];
    $Nama_anak = $_POST['Nama_anak'];
    $Nomer_hp = $_POST['Nomer_hp'];
    $NIS = $POST['NIS']
    $aql = "update pdi set id=$id, Unsername='$Unsername', Nama_waifu='$Nama_waifu', Nama_anak='$Nama_anak', Nomer_hp='Nomer_hp', NIS='$NIS' where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('lacation:read.php');
    } else {
        die($conn->connect_error);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class= "min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">
    <h3 class="text-center">Update</h3>
    <from method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Unsername</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $Unsername ?>">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Nama waifu</label>
            <input type="text" class="form-control" id="Nama waifu" name="Nama waifu" value="<?php echo $Nama_waifu ?>">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama anak</label>
            <input type="text" class="form-control" id="Nama anak" name="Nama anak" value="<?php echo $Nama_anak ?>">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Nomer hp</label>
            <input type="text" class="form-control" id="Nomer hp" name="Nomer hp" value="<?php echo $Nomer_hp ?>">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">NIS</label>
            <input type="text" class="form-control" id="NIS" name="NNIS" value="<?php echo $NIS ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>