<?php 
session_start();
include 'conf.php';

$id = $_POST['id_user'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$password = $_POST['password'];

$result = mysqli_query($con,"SELECT id_user FROM user WHERE id_user = '$id'");
if ( mysqli_fetch_assoc($result) ) {
    echo "<script>
    alert('NIK telah terdaftar');window.location='../login/index.php';
    </script>";
    return false;
}

$mysqli = mysqli_query($con,"INSERT INTO USER (nama, nik, password) values
('$nama','$nik','$password')");

if ($mysqli) {
    $_SESSION['regist']= true;
    echo"<script>alert('berhasil register');window.location='../login/index.php';</script>";
    
}else {
    echo"<script>alert('gagal register');window.location='../login/index.php';</script>";
}

?>