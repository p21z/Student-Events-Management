<?php

$url_id=$this->session->userdata("url_id_3");

$table_name="tbl_stud_list";
$column="stud_list_id";

$user_editedValues = array(
    'event_id' => $this->session->userdata("url_id_2"),
    'stud_name' => $this->session->userdata("stud_name"),
    'year' => $this->session->userdata("year"),
    'program' => $this->session->userdata("program"),
    'section' => $this->session->userdata("section")
);

echo update_from($user_editedValues, $url_id, $table_name, $column);
// update_from($user_editedValues, $id, $table_name, $column);

?>
