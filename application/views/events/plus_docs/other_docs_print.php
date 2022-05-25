<?php
// $target_dir = $_SERVER['DOCUMENT_ROOT']."/Student-Events-Management/attachments";
$target_dir = "/Student-Events-Management/attachments";
$docs_data=get_where_custom('tbl_docs', 'doc_id', $url_id_2);

foreach ($docs_data as $key => $row){
    $filename = $row['filename'];

    // echo $filename;
}

$file = $target_dir.'/'.$filename;
echo $file;

header('Content-Type: image/jpg');
// header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"" . basename($file) . "\""); 
ob_clean();
readfile($file); 



?>

