<?php

$url_id=$this->session->userdata("url_id_3");

$table_name="tbl_rsrv_cfr";
$column="rsrv_cfr_id";

$user_editedValues = array(
    
    'event_id' => $this->session->userdata("url_id_2"),
    'func_room' => $this->session->userdata("func_room"),
    'num_users' => $this->session->userdata("num_users"),
    'purpose' => $this->session->userdata("purpose"),
    'fund_source' => $this->session->userdata("fund_source"),
    'amount' => $this->session->userdata("amount"),
    'person_respo' => $this->session->userdata("person_respo"),
    'specs' => $this->session->userdata("specs"),

    'start_date' => $this->session->userdata("date_start"),
    'start_time' => $this->session->userdata("time_start"),
    'end_date' => $this->session->userdata("date_end"),
    'end_time' => $this->session->userdata("time_end")
    
);

update_from($user_editedValues, $url_id, $table_name, $column);
// update_from($user_editedValues, $id, $table_name, $column);

?>
