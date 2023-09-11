<?php
include 'connect.php';
session_start();

if ( isset( $_POST[ 'submit' ] ) ) {
    $Unsername = $_POST[ 'Unsername' ];
    $Nama_waifu = $_POST[ 'Nama_waifu' ];
    $Nama_anak = $_POST[ 'Nama_anak' ];
    $Nomor_hp = $_POST[ 'Nomor_hp' ];
    $NIS = $_POST[ 'NIS' ];
    $sql = "insert into pdi(Unsername, Nama_waifu, Nama_anak, Nomer_hp, NIS) values('$Unsername', ' $Nama_waifu', '$Nama_anak', '$Nomor_hp', '$NIS')";
    $result = mysqli_query( $conn, $sql );
    if ($result){
        header( 'location:read.php' );
    } else {
        die( $conn->connect_error );
    }
}
?>
<style>
        body {
          background-image: url('https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2023/02/05/2148990265.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
        }
        </style>
<!DOCTYPE html>
<html lang = 'en'>
<head>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>Daftar</title>
<link href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css' rel = 'stylesheet'
integrity = 'sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9' crossorigin = 'anonymous'>
</head>
<body class='min-vh-100 d-flex align-items-center'>
<div class='card w-50 m-auto p-3'>
<h3 class='text-center' style="background-color:darkgrey">DATA PENGGUNA</h3>
    <form method = 'post'>
        <div class='mb-3'>
            <label for = 'Unsername' class='form-label'>Unsername</label>
            <input type = 'text' name="Unsername" class='form-control' id = 'Unsername'>
        </div>
        <div class='mb-3'>
            <label for = 'Nama_waifu' class='form-label'>Nama_waifu</label>
            <input type = 'text' name="Nama_waifu" class='form-control' id = 'Nama_waifu'>
        </div>
        <div class='mb-3'>
            <label for = 'Nama_anak' class='form-label'>Nama_anak</label>
            <input type = 'text' name="Nama_anak" class='form-control' id = 'Nama_anak'>
        </div>  
        <div class='mb-3'>
            <label for = 'Nomer_hp' class='form-label'>Nomer_hp</label>
            <input type = 'text' name="Nomor_hp" class='form-control' id = 'Nomer_hp'>
        </div>  
        <div class='mb-3'>
            <label for = 'NIS' class='form-label'>NIS</label>
            <input type = 'text' name="NIS" class='form-control' id = 'NIS'>
        </div>  
            <button type = 'submit' class='btn btn-primary' name="submit">Submit</button>
        </div>  
    </form>
</div>
</body>
</html>