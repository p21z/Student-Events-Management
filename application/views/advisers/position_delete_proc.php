<?php
$url_id=$this->session->userdata("off_id");
$table_name = "tbl_officers";
$column = "off_id";
print_r($_SESSION);
delete_from($url_id, $table_name, $column);
// $_SESSION['alert_msg']=3;