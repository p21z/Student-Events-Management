<?php

$url_id=$this->session->userdata("url_id_3");

$table_name="tbl_trp_tckt";
$column="trp_tckt_id";

$user_editedValues = array(
    
    'event_id' => $this->session->userdata("url_id_2"),
    'request_unit' => $this->session->userdata("request_unit"),
    'person' => $this->session->userdata("person"),
    'driver' => $this->session->userdata("driver"),
    'vehicle' => $this->session->userdata("vehicle"),
    'activity' => $this->session->userdata("activity"),
    'date_use' => $this->session->userdata("date_use"),
    'dept_time' => $this->session->userdata("dept_time"),
    'eta' => $this->session->userdata("eta")
);

echo update_from($user_editedValues, $url_id, $table_name, $column);

echo $table_name." ".$column." ".$url_id;
// update_from($user_editedValues, $id, $table_name, $column);

?>
