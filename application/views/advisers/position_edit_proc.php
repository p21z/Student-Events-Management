<?php
print_r($_SESSION);
$table_name="tbl_officers";
$column="off_id";

$user_editedValues = array(
    
    'off_type' => $this->session->userdata("off_type")
    
);

update_from($user_editedValues, $this->session->userdata("off_id"), $table_name, $column);