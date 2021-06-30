<?php
date_default_timezone_set('Asia/Singapore');
$xdate=date('Y-m-d');
$table_name = "tbl_users";

$user_data = array(
    'user_id' => $this->session->userdata("user_id"),
    'username' => $this->session->userdata("username_1"),
    'password' => _hash_string($this->session->userdata("password")),
    'firstname' => $this->session->userdata("firstname"),
    'lastname' => $this->session->userdata("lastname"),
    'email' => $this->session->userdata("email"),
    'contact_no' => $this->session->userdata("contact_no"),
    'gender' => $this->session->userdata("gender"),
    'user_type' => $this->session->userdata("user_type"),
    'time_stamp' => $xdate,
    'year_level' => $this->session->userdata("year_level"),
    'program' => $this->session->userdata("program"),
    'section' => $this->session->userdata("section"),
    
    'archive' => $this->session->userdata("archive"),
    'statusxx' => $this->session->userdata("statusxx")
);

echo insert($user_data, $table_name);
?>