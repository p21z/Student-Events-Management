<?php


// UPDATING ATTENDANCE
$url_id=$this->session->userdata("url_id_3");

$table_name="tbl_attendee";
$column="attendance_id";

$user_editedValues = array(
    
    'statusxx' => $this->session->userdata("statusxx")
    
);

update_from($user_editedValues, $url_id, $table_name, $column);
// update_from($user_editedValues, $id, $table_name, $column);