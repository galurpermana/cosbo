<?php 
include 'conf.php';

$nik = $_POST['nik'];
$no_kk = $_POST['no_kk'];
$nama = $_POST['nama'];
$almt_skr = $_POST['almt_skr'];
$almt_tjn = $_POST['almt_tjn'];
$jml = $_POST['jml'];

$insert = mysqli_query($con,"INSERT INTO surat_domisili (nik, no_kk, nm_kk, alamat_skr, alamat_tjn, jml_klrg) values ('$nik', '$no_kk', '$nama', '$almt_skr', '$almt_tjn', '$jml')");

if ($insert) {
    echo"<script>alert('Berhasil mengirim data');window.location='../index.html';</script>";
}else {
    echo"<script>alert('gagal mengirim data');window.location='../index.html';</script>";
}
?>