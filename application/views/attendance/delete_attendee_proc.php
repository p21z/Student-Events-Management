<?php
$url_id=$this->session->userdata("url_id_3");
$table_name = "tbl_attendee";
$column = "attendance_id";
echo $url_id." ".$table_name." ".$column;
delete_from($url_id, $table_name, $column);
$_SESSION['alert_msg']=3;