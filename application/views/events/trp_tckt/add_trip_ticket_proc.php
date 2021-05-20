<?php
$table_name ="tbl_trp_tckt";

$tra_prmt_data = array(
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

echo insert($tra_prmt_data, $table_name);

echo $this->session->userdata("person");

?>