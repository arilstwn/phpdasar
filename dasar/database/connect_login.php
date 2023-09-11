<?php
$servername = "localhost:3306";
$unsername_db = "root";
$password_db = "";
$database_name = "db_sekolah";

$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli($servername, $unsername_db, $password_db, $database_name);

if ($conn->connect_error) {
    die("koneksi databasegagal: " . $conn->connect_error);
} else{
    $stmt = $conn->prepare("select * from admin where email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0){
        $data = $stmt_result->fetch_assoc();
        if ($data['password'] === $password){
            echo  "<h2>login berhasil, halo " . $data['unsername'] . "<?h2>";
        } else {
            echo "<h2>Email Atau Password Salah</h2>";
        }
    } else {
        echo "<h2>Email Atau Password Salah</h2>";
}
}
?>