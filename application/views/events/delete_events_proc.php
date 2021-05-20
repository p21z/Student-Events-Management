<?php
$url_id=$this->session->userdata("url_id_2");
$table_name="tbl_events";
$column="event_id";

echo delete_from($url_id, $table_name, $column);
$_SESSION['alert_msg']=3;