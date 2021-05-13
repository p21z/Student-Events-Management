<?php
$table_name ="tbl_rsrv_cfr";

$rsrv_cfr_data = array(
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

echo insert($rsrv_cfr_data, $table_name);

// get the rsrv_cfr_id
$rsrv_cfr_id=get_last($table_name, 'rsrv_cfr_id');

foreach ($rsrv_cfr_id as $key => $row)
{
    $rsrv_cfr_id=$row['rsrv_cfr_id'];
}

// insert rsrv_cfr_id to event table
$table_name="tbl_events";
$column="event_id";

$user_editedValues = array(
    
    'rsrv_cfr_id' => $rsrv_cfr_id

);

echo update_from($user_editedValues, $this->session->userdata("url_id_2"), $table_name, $column);

?>