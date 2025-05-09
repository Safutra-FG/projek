<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "Traz_Computer";

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
