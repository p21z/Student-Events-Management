<?php

$url_id=$this->session->userdata("url_id_3");

$table_name="tbl_trp_tckt";
$column="trp_tckt_id";

$user_editedValues = array(
    
    'event_id' => $this->session->userdata("url_id_2"),
    'request_unit' => $this->session->userdata("request_unit"),
    'person' => $this->session->userdata("person"),
    'driver' => $this->session->userdata("driver"),
    'vehicle' => $this->session->userdata("vehicle"),
    'activity' => $this->session->userdata("activity"),
    'date_use' => $this->session->userdata("date_use"),
    'dept_time' => $this->session->userdata("dept_time"),
    'eta' => $this->session->userdata("eta"),
    'passengers' => $this->session->userdata("passengers"),
    'destination' => $this->session->userdata("destination")
    
);

echo update_from($user_editedValues, $url_id, $table_name, $column);

echo $table_name." ".$column." ".$url_id;
// update_from($user_editedValues, $id, $table_name, $column);
// ______________________________________________________________________________________________________________________
    // GETTING ENTRY ID

    $doc_data=get_where_custom($table_name, $column, $url_id);
    
        foreach ($doc_data as $key => $row) {

            $event_id=$row['event_id'];
            // $org_id=$row['org_id'];
            // $event_name=$row['event_name'];

        }

        $event_data=get_where_custom("tbl_events", "event_id", $event_id);

        foreach ($event_data as $key => $row)
        {
            $org_id=$row['org_id'];
            $event_name=$row['event_name'];
        }

    $username=$this->session->userdata('username');
    $fullname=$this->session->userdata('firsnamexx')." ".$this->session->userdata('lastnamexx');;
    $user_type=$this->session->userdata('access');
    $off_type="";

    if ($user_type==="Officer")
    {
        // get where org_id=url_id && user_id==session(idxx) in officer data

        $table_name_2="tbl_officers";
        $column1="org_id";
        $column2="user_id";
        $value2=$this->session->userdata('idxx');
        $officer_data=get_where_double_and($table_name_2, $column1, $org_id, $column2, $value2);
        
        foreach ($officer_data as $key => $row) {

            $off_id=$row['off_id'];
            $off_type=$row['off_type'];
            
        }

    }
    date_default_timezone_set('Asia/Singapore');
    $xdate=date('Y-m-d');
    $xtime=date("H:i:s");

    $action= "trip ticket edited";

    $table_name_3="tbl_notif";
    $notif_data = array(
        'username' => $username,
        'fullname' => $fullname,
        'user_type' => $user_type,
        'off_type' => $off_type,
        'datexx' => $xdate,
        'timexx' => $xtime,
        'action' => $action,
        'org_id' => $org_id,
        'event_id' => $event_id
    );
    
    echo insert($notif_data, $table_name_3);

?>
