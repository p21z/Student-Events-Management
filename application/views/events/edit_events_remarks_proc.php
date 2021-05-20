<?php

$url_id=$this->session->userdata("url_id_2");

$table_name="tbl_events";
$column="event_id";

$user_editedValues = array(
    
    'remarks' => $this->session->userdata("remarks")
);

echo update_from($user_editedValues, $url_id, $table_name, $column);

// echo $table_name." ".$column." ".$url_id;
// update_from($user_editedValues, $id, $table_name, $column);

?>
