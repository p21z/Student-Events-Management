<?php
$table_name ="tbl_cat_req";

$cat_req_data = array(
    'event_id' => $this->session->userdata("url_id_2"),
    'datexx' => $this->session->userdata("datexx"),
    'time_needed' => $this->session->userdata("time_needed"),
    'occasion' => $this->session->userdata("occasion"),
    'num_guest' => $this->session->userdata("num_guest"),
    'menu' => $this->session->userdata("menu"),
    'venue' => $this->session->userdata("venue"),
    'remarks' => $this->session->userdata("remarks")
);

echo insert($cat_req_data, $table_name);

?>