<?php 
session_start();
include 'conf.php';

$nik = $_POST['nik'];
$password = $_POST['password'];


$login = mysqli_query($con,"SELECT * FROM user WHERE password = '$password' ");
$cek = mysqli_num_rows($login);
$data = mysqli_fetch_array($login);


if ($cek > 0) {
    $_SESSION['login']= true;
    $_SESSION['id']=$data['id_user'];
    $_SESSION['nama']=$data['nama'];
    $_SESSION['nik']=$data['nik'];
    echo"<script>alert('LOGIN BERHASIL');window.location='../index.php';</script>";
    
}else {
    echo"<script>alert('login gagal');window.location='../login/index.php';</script>";
 
}

?>