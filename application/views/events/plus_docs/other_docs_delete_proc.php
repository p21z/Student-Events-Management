<?php
$url_id=$this->session->userdata("url_id_2");
$table_name="tbl_docs";
$column="doc_id";



echo delete_from($url_id, $table_name, $column);
$_SESSION['err_msg1']='File deleted';
$_SESSION['err_msg2']='success';