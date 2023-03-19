<?php 
require 'vendor/autoload.php';
  
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('templatesurat.docx');
  
$templateProcessor->setValues(array(
    'nik'                 => $_POST['nik'], 
    'namalengkap'         => $_POST['nama'],
    'nokartu'             => $_POST['no_kk'],
    'alamatsekarang'      => $_POST['almt_skr'],
    'alamattujuan'        => $_POST['almt_tjn'],
    'jumlah'              => $_POST['jml'],
));
  
// Save the file to the 'saved_docs' folder
$timestamp = date('YmdHis');
$outputFile = "vendor/save/nota_dinas_.docx";
$templateProcessor->saveAs($outputFile);

echo "File saved to $outputFile";
header("location:../tables/datatables.php")
?>
