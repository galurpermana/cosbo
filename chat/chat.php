<?php

if (isset($_POST['sent'])) {
    $chat = $_POST['chat'];
    switch ($chat) {
        case 1:
            $mysql = mysqli_query();
            break;
        
        default:
            echo"masukan kode surat yang benar";
            break;
    }
}

?>