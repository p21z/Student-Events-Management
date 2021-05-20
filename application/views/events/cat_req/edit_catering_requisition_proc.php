<?php

$url_id=$this->session->userdata("url_id_3");

$table_name="tbl_cat_req";
$column="cat_req_id";

$user_editedValues = array(
    
    'datexx' => $this->session->userdata("datexx"),
    'time_needed' => $this->session->userdata("time_needed"),
    'occasion' => $this->session->userdata("occasion"),
    'num_guest' => $this->session->userdata("num_guest"),
    'menu' => $this->session->userdata("menu"),
    'venue' => $this->session->userdata("venue"),
    'remarks' => $this->session->userdata("remarks")
);

echo update_from($user_editedValues, $url_id, $table_name, $column);
// update_from($user_editedValues, $id, $table_name, $column);

?>
