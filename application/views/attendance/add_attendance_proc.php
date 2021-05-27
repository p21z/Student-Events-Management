<?php

$table_name="tbl_users";
$column="user_id";

$user_data=get_where_custom($table_name, $column, $this->session->userdata("url_id_2"));

foreach ($user_data as $key => $row)
{
    $user_id=$row['user_id'];

    $username=$row['username'];
    $firstname=$row['firstname'];
    $lastname=$row['lastname'];

    $email=$row['email'];
    $contact_no=$row['contact_no'];

    $user_type=$row['user_type'];

    $year_level=$row['year_level'];
    $program=$row['program'];
    $section=$row['section'];
}



// date_default_timezone_set('Asia/Singapore');
// $xdate=date('Y-m-d');
$table_name = "tbl_attendee";

$attendee_data = array(

    'event_id' => $this->session->userdata("url_id"),
    'user_id' => $this->session->userdata("url_id_2"),

    'username' => $username,
    'firstname' => $firstname,
    'lastname' => $lastname,

    'email' => $email,
    'contact_no' => $contact_no,
    
    'user_type' => $user_type,
    
    'year_level' => $year_level,
    'program' => $program,
    'section' => $section,

    'statusxx' => $this->session->userdata("statusxx")
    
);
print_r($attendee_data);
echo insert($attendee_data, $table_name);
?>