<?php
$table_name ="tbl_in_cmp";

$in_cmp_data = array(
    'event_id' => $this->session->userdata("url_id_2"),
    'organizer' => $this->session->userdata("organizer"),
    'nature' => $this->session->userdata("nature"),
    'datexx' => $this->session->userdata("datexx"),
    'timexx' => $this->session->userdata("timexx"),
    'speaker' => $this->session->userdata("speaker"),
    'venue' => $this->session->userdata("venue"),
    'num_participants' => $this->session->userdata("num_participants"),
    'program_budget' => $this->session->userdata("program_budget"),
    'objective_1' => $this->session->userdata("objective_1"),
    'objective_2' => $this->session->userdata("objective_2"),
    'objective_3' => $this->session->userdata("objective_3"),
);

echo insert($in_cmp_data, $table_name);

?>