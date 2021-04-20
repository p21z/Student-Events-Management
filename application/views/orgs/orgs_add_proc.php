<?php
$table_name ="tbl_orgs";

$org_data = array(
    'org_name' => $this->session->userdata("org_name"),
    'org_description' => $this->session->userdata("org_description"),
    'org_category' => $this->session->userdata("org_category")
);

echo insert($org_data, $table_name);

?>