<?php

$url_id=$this->session->userdata("url_id_2");

$table_name="tbl_events";
$column="event_id";

$user_editedValues = array(
    
    'statusxx' => $this->session->userdata("statusxx")
);

echo update_from($user_editedValues, $url_id, $table_name, $column);

// echo $table_name." ".$column." ".$url_id;
// update_from($user_editedValues, $id, $table_name, $column);

// ______________________________________________________________________________________________________________________
    // GETTING ENTRY ID

    $event_data=get_where_custom($table_name, $column, $url_id);
    
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

    $xdate=date('Y-m-d');
    $xtime=date("h:i:s a");

    $action= "Status changed to ".$this->session->userdata("statusxx");

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
        'event_id' => $url_id
    );
    
    echo insert($notif_data, $table_name_3);



?>
