<?php

$url_id=$this->session->userdata("url_id");

$table_name="tbl_orgs";
$column="org_id";

$user_editedValues = array(
    
    'Archive' => $this->session->userdata("Archive")

);

echo update_from($user_editedValues, $url_id, $table_name, $column);
// update_from($user_editedValues, $id, $table_name, $column);

// ?>