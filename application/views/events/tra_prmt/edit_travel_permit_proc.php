<?php

$url_id=$this->session->userdata("url_id_3");

$table_name="tbl_tra_prmt";
$column="tra_prmt_id";

$user_editedValues = array(
    
    'event_id' => $this->session->userdata("url_id_2"),
    'name' => $this->session->userdata("name"),
    'place' => $this->session->userdata("place"),
    'venue' => $this->session->userdata("venue"),
    'datexx' => $this->session->userdata("datexx"),
    'date_return' => $this->session->userdata("date_return"),
    'relation1' => $this->session->userdata("relation1"),
    'relation2' => $this->session->userdata("relation2"),
    'others' => $this->session->userdata("others")
);

echo update_from($user_editedValues, $url_id, $table_name, $column);
// update_from($user_editedValues, $id, $table_name, $column);

?>
