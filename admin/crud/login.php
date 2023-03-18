<?php 
session_start();
include 'conf.php';

$nama = $_POST['nama'];
$password = $_POST['password'];


$login = mysqli_query($con,"SELECT * FROM admint WHERE username='$nama' and password = '$password' ");
$cek = mysqli_num_rows($login);
$data = mysqli_fetch_array($login);

if ($cek > 0) {
    $_SESSION['login']= true;
    $_SESSION['username']=$data['username'];
    echo"<script>alert('LOGIN BERHASIL');window.location='../index.php';</script>";
    
}else {
    echo"<script>alert('login gagal');window.location='../login/index.php';</script>";
 
}

?>