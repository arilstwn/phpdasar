<?php
include 'connect.php';

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

if ($conn->connect_error) {
    die("koneksi database gagal: ". $conn->connect_error);
} else{
    $stmt = $conn->prepare('insert into admin(unsername, email, password) values(?, ?, ?)');
    $stmt->bind_param("sss", $username, $email, md5($password));
    $stmt->execute();
    echo "Regristasi berhasil";
    $stmt->close();
    $conn->close();
}
?>