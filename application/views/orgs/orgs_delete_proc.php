<?php
$url_id=$this->session->userdata("url_id");
$table_name = "tbl_orgs";
$table_name2 = "tbl_inclusion";
$column = "org_id";

echo delete_from($url_id, $table_name, $column);
delete_from($url_id, $table_name2, $column);
$_SESSION['alert_msg']=3;