<?php
$url_id=$this->session->userdata("url_id");
$table_name = "tbl_inclusion";
$column = "org_id";
echo $url_id;
// print_r($_SESSION);

delete_from($url_id, $table_name, $column);
