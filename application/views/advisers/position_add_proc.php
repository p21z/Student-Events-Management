<?php
$table_name = "tbl_officers";

$officer_data = array(
    'user_id' => $this->session->userdata("user_id"),
    'org_id' => $this->session->userdata("org_id"),
    'off_type' => $this->session->userdata("off_type")
);

echo insert($officer_data, $table_name);
?>