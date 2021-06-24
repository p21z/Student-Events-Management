<?php

$url_id=$this->session->userdata("url_id");

$table_name="tbl_visitor";
$column="visitor_id";

$user_editedValues = array(
    
    'event_id' => $this->session->userdata("event_id"),
    'firstname' => $this->session->userdata("firstname"),
    'lastname' => $this->session->userdata("lastname"),
    'contact' => $this->session->userdata("contact"),
    'email' => $this->session->userdata("email"),
    'company' => $this->session->userdata("company"),
    
);

update_from($user_editedValues, $url_id, $table_name, $column);

// update_from($user_editedValues, $id, $table_name, $column);