<?php 
session_start();
$_SESSION = [];
session_unset();
session_destroy();
echo"<script>alert('anda logout');window.location='../login/index.php';</script>";
exit;

?>