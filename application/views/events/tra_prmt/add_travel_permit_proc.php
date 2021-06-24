<?php
$table_name ="tbl_tra_prmt";

$tra_prmt_data = array(
    'event_id' => $this->session->userdata("url_id_2"),
    'name' => $this->session->userdata("name"),
    'place' => $this->session->userdata("place"),
    'venue' => $this->session->userdata("venue"),
    'datexx' => $this->session->userdata("datexx"),
    'date_return' => $this->session->userdata("date_return"),
    'relation1' => $this->session->userdata("relation1"),
    'relation2' => $this->session->userdata("relation2"),
    'others' => $this->session->userdata("others")
);

echo insert($tra_prmt_data, $table_name);

// ______________________________________________________________________________________________________________________
    // GETTING ENTRY ID

    $doc_data=get_latest_0($table_name, "tra_prmt_id");
    
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

    $action= "travel permit added";

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