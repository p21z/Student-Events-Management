<?php

$url_id=$this->session->userdata("url_id");

$table_name="tbl_visitor";
$column="visitor_id";

$user_editedValues = array(
    
    'statusxx' => $this->session->userdata("statusxx"),

    
);

update_from($user_editedValues, $url_id, $table_name, $column);

// update_from($user_editedValues, $id, $table_name, $column);