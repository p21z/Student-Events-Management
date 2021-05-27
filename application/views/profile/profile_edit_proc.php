<?php

$url_id=$this->session->userdata("idxx");

$table_name="tbl_users";
$column="user_id";

$user_editedValues = array(
    
    
    'firstname' => $this->session->userdata("firstname"),
    'lastname' => $this->session->userdata("lastname"),
    'email' => $this->session->userdata("email"),
    'contact_no' => $this->session->userdata("contact_no"),
    'gender' => $this->session->userdata("gender"),
    
    
    'year_level' => $this->session->userdata("year_level"),
    'program' => $this->session->userdata("program"),
    'section' => $this->session->userdata("section"),
    
    
);

echo update_from($user_editedValues, $url_id, $table_name, $column);

$_SESSION['firstnamexx']=$this->session->userdata("firstname");
$_SESSION['lastnamexx']=$this->session->userdata("lastname");

// update_from($user_editedValues, $id, $table_name, $column);