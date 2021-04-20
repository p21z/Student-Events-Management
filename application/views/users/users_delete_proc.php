<?php
$url_id=$this->session->userdata("url_id");
$table_name = "tbl_users";
$column = "user_id";

delete_from($url_id, $table_name, $column);
$_SESSION['alert_msg']=3;