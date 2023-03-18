<?php
// Data koneksi database
$host = 'localhost';
$username = 'root';
$password = 'password';
$database = 'nama_database';

// Buat koneksi PDO
try {
  $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
  
  // Konfigurasi opsi PDO
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  echo "Koneksi berhasil";
} catch(PDOException $e) {
  echo "Koneksi gagal: " . $e->getMessage();
}
?>