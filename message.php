<?php

$conn = mysqli_connect("localhost:3636", "root", "", "hakton") or die ("Database Error");
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);
$check_data = "SELECT jawaban FROM chatbot WHERE pertanyaan LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die ("Error");

if (mysqli_num_rows($run_query) > 0){
    $fetch_data = mysqli_fetch_assoc($run_query);
    $replay = $fetch_data['jawaban'];
    echo $replay;
}else{
    echo "saya tidak mengerti apa yang anda maksud";
}


?>