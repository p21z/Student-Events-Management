<?php

// $file1=base_url().'assets/img/helpdesk.pdf';
// $file1='http://localhost/Student-Events-Management/assets/img/helpdesk.pdf';
$file1='C:/xampp/htdocs/Student-Events-Management/assets/img/helpdesk.pdf';
// $file1='helpdesk.pdf';
echo $file1;

header('Content-type:application/pdf');
header('Content-Description:inline;filename="'. $file1 .'"');
header('Content-Transfer-Encoding:binary');
header('Accept-ranges:bytes');
@readfile($file1);
?>