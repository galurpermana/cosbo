<?php
include '../crud/conf.php';

if (isset($_POST['sent'])) {
    $chat = $_POST['chat'];
    switch ($chat) {
        case 1:

            $mysql = mysqli_query($con,"INSERT into surat_domisili (nik) values ('$chat')");
            break;
        
        default:
            echo"masukan kode surat yang benar";
            break;
    }
}

?>