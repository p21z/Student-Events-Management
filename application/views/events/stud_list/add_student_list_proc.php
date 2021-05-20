<?php
$table_name ="tbl_stud_list";

$xcxz = array(
    'event_id' => $this->session->userdata("url_id_2"),
    'stud_name' => $this->session->userdata("stud_name"),
    'year' => $this->session->userdata("year"),
    'program' => $this->session->userdata("program"),
    'section' => $this->session->userdata("section")
);

echo insert($xcxz, $table_name);

?>