<?php
$table_name = "tbl_events";

$event_data = array(
    'org_id' => $this->session->userdata("org_id"),
    // 'org_name' => $this->session->userdata("org_name"),
    'event_name' => $this->session->userdata("event_name"),
    'start_date' => $this->session->userdata("start_date"),
    'start_time' => $this->session->userdata("start_time"),
    'end_date' => $this->session->userdata("end_date"),
    'end_time' => $this->session->userdata("end_time"),
    'venue' => $this->session->userdata("venue"),
    'event_description' => $this->session->userdata("event_description"),
    'statusxx' => "Pending"
);

echo insert($event_data, $table_name);
?>