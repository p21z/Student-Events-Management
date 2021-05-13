<?php

$url_id=$this->session->userdata("url_id_3");

$table_name="tbl_csh_req";
$column="csh_req_id";

$user_editedValues = array(
    
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
    'datexx' => $this->session->userdata("datexx"),
    
    
    
);

echo update_from($user_editedValues, $url_id, $table_name, $column);
// update_from($user_editedValues, $id, $table_name, $column);

?>
