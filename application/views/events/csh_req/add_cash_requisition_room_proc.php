<?php
$table_name ="tbl_csh_req";

$csh_req_data = array(
    'event_id' => $this->session->userdata("url_id_2"),
    'busfare' => $this->session->userdata("busfare"),
    'taxifare' => $this->session->userdata("taxifare"),
    'otherfare' => $this->session->userdata("otherfare"),
    'food_allowance' => $this->session->userdata("food_allowance"),
    'reg_fee' => $this->session->userdata("reg_fee"),
    'accommodation' => $this->session->userdata("accommodation"),
    'honorarium' => $this->session->userdata("honorarium"),

    'rel_of_acco' => $this->session->userdata("rel_of_acco"),
    'monthly_bills' => $this->session->userdata("monthly_bills"),
    'supplies' => $this->session->userdata("supplies"),
    'purpose' => $this->session->userdata("purpose"),
    'pay_to' => $this->session->userdata("pay_to"),
    'date_need' => $this->session->userdata("date_need"),
    

);

echo insert($csh_req_data, $table_name);

// get the csh_req_id
$csh_req_id=get_last($table_name, 'csh_req_id');

foreach ($csh_req_id as $key => $row)
{
    $csh_req_id=$row['csh_req_id'];
}

// insert csh_req_id to event table
$table_name="tbl_events";
$column="event_id";

$user_editedValues = array(
    
    'csh_req_id' => $csh_req_id

);

echo update_from($user_editedValues, $this->session->userdata("url_id_2"), $table_name, $column);

?>