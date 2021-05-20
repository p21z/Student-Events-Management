<?php
$url_id=$this->session->userdata("url_id_3");
$table_name = "tbl_stud_list";
$column = "stud_list_id";

echo delete_from($url_id, $table_name, $column);
$_SESSION['alert_msg']=3;