<?php

$url_id=$this->session->userdata("url_id");

$table_name="tbl_orgs";
$column="org_id";

$user_editedValues = array(
    
    'org_name' => $this->session->userdata("org_name"),
    'org_description' => $this->session->userdata("org_description"),
    'org_category' => $this->session->userdata("org_category"),
    'org_abbr' => $this->session->userdata("org_abbr")
    

);

echo update_from($user_editedValues, $url_id, $table_name, $column);
// update_from($user_editedValues, $id, $table_name, $column);

// ?>