<?php
$table_name ="tbl_cat_req";

$cat_req_data = array(
    'event_id' => $this->session->userdata("url_id_2"),
    'datexx' => $this->session->userdata("datexx"),
    'time_needed' => $this->session->userdata("time_needed"),
    'occasion' => $this->session->userdata("occasion"),
    'num_guest' => $this->session->userdata("num_guest"),
    'orderxx' => $this->session->userdata("order"),
    'menu' => $this->session->userdata("menu"),
    'venue' => $this->session->userdata("venue"),
    'remarks' => $this->session->userdata("remarks")
);

echo insert($cat_req_data, $table_name);

// ______________________________________________________________________________________________________________________
    // GETTING ENTRY ID

    $doc_data=get_latest_0($table_name, "cat_req_id");
    
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

    $action= "catering requisition added";

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