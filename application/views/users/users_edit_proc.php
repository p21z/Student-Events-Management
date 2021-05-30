<?php

$url_id=$this->session->userdata("url_id");

$table_name="tbl_users";
$column="user_id";

$user_editedValues = array(
    
    'password' => $this->session->userdata("password"),
    'firstname' => $this->session->userdata("firstname"),
    'lastname' => $this->session->userdata("lastname"),
    'email' => $this->session->userdata("email"),
    'contact_no' => $this->session->userdata("contact_no"),
    'gender' => $this->session->userdata("gender"),
    'user_type' => $this->session->userdata("user_type"),
    
    'year_level' => $this->session->userdata("year_level"),
    'program' => $this->session->userdata("program"),
    'section' => $this->session->userdata("section"),
    'statusxx' => $this->session->userdata("statusxx")
    
);

update_from($user_editedValues, $url_id, $table_name, $column);

if ($url_id==$this->session->userdata('idxx'))
{
    $_SESSION['firstnamexx']=$this->session->userdata("firstname");
    $_SESSION['lastnamexx']=$this->session->userdata("lastname");
}

// update_from($user_editedValues, $id, $table_name, $column);