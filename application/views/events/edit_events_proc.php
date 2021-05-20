<?php

$url_id=$this->session->userdata("url_id_2");

$table_name="tbl_events";
$column="event_id";

$user_editedValues = array(
    
    'event_name' => $this->session->userdata("event_name"),
    'start_date' => $this->session->userdata("start_date"),
    'start_time' => $this->session->userdata("start_time"),
    'end_date' => $this->session->userdata("end_date"),
    'end_time' => $this->session->userdata("end_time"),
    'venue' => $this->session->userdata("venue"),
    'event_description' => $this->session->userdata("event_description")
);

echo update_from($user_editedValues, $url_id, $table_name, $column);

// echo $table_name." ".$column." ".$url_id;
// update_from($user_editedValues, $id, $table_name, $column);

?>
