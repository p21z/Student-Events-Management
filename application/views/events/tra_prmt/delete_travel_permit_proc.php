<?php
$url_id=$this->session->userdata("url_id_3");
$table_name = "tbl_tra_prmt";
$column = "tra_prmt_id";

echo delete_from($url_id, $table_name, $column);
$_SESSION['alert_msg']=3;