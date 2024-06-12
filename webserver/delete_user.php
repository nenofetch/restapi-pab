<?php
require_once 'db_config.php';
header('Content-Type: application/json');
$url = $_SERVER['REQUEST_URI'];
$parts = explode('/', $url);
$userId = end($parts);
$sql = mysqli_query($koneksi, "DELETE FROM users where id = '$userId'");

if ($sql) {
  echo "Pengguna dengan ID $userId telah dihapus.";
} else {
  echo "Pengguna tidak ditemukan!";
}


$koneksi->close();
