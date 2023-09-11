<?php
$servername = "localhost:3306";
$username_db = "root";
$password_db = "";
$database_name = "crud";

$email = $_POST['email'];
$unsername = $_POST['unsername'];
$password = $_POST['password'];

$conn = new mysqli($servername, $username_db, $password_db, $database_name);

if ($conn->connect_error) {
    die("koneksi database gagal: ". $conn->connect_error);
} else{
    $stmt = $conn->prepare("insert into admin(email, unsername, password) values(?, ?, ?)");
    $stmt->bind_param("sss", $email, $unsername, $password);
    $stmt->execute();
    echo "Regristasi berhasil";
    $stmt->close();
    $conn->close();
}
?>