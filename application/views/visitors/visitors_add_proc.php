<?php
date_default_timezone_set('Asia/Singapore');
$xdate=date('Y-m-d');
$table_name = "tbl_visitor";

$user_data = array(
    'event_id' => $this->session->userdata("event_id"),
    'firstname' => $this->session->userdata("firstname"),
    'lastname' => $this->session->userdata("lastname"),
    'contact' => $this->session->userdata("contact"),
    'email' => $this->session->userdata("email"),
    'company' => $this->session->userdata("company"),
    'statusxx' => $this->session->userdata("statusxx"),
    'date_reg' => $xdate
);

echo insert($user_data, $table_name);
?>