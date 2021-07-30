<?php

$org_data = get_where_custom('tbl_orgs', 'org_id', $this->session->userdata('org_id'));

foreach ($org_data as $key => $row)
{
    $org_category=$row['org_category'];
}

if ($org_category==="Program-based")
{
    $prog_base="Y";
} else
{
    $prog_base="";
}

$table_name = "tbl_events";

$event_data = array(
    'org_id' => $this->session->userdata("org_id"),
    // 'org_name' => $this->session->userdata("org_name"),
    'event_name' => $this->session->userdata("event_name"),
    'start_date' => $this->session->userdata("start_date"),
    'start_time' => $this->session->userdata("start_time"),
    'end_date' => $this->session->userdata("end_date"),
    'end_time' => $this->session->userdata("end_time"),
    'venue' => $this->session->userdata("venue"),
    'event_description' => $this->session->userdata("event_description"),
    'statusxx' => "Pending",
    'prog_base' => $prog_base
);
print_r($event_data);
echo insert($event_data, $table_name);

// ______________________________________________________________________________________________________________________
    // GETTING ENTRY ID

    $event_data=get_latest_0($table_name, "event_id");
    
        foreach ($event_data as $key => $row) {

            $event_id=$row['event_id'];
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

    $action= "created";

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

    $event_data=get_latest_0('tbl_events', 'event_id');

    foreach($event_data as $key => $row)
    {
        $org_id_2=$row['org_id'];
    }

    $_SESSION['org_id_2']=$org_id_2;
?>