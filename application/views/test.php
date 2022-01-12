<?php

    $officer_data=get_where_custom_header_special("tbl_officers", "user_id", $this->session->userdata('idxx'));

    foreach ($officer_data as $key => $row)
    {
        $org_id=$row['org_id'];

        $notif_data=get_where_desc("tbl_notif", "org_id", $org_id, "notif_id");
        $notif_id_array_0=array();
        foreach ($notif_data as $key => $row)
        {
            
            $notif_id=$row['notif_id'];

            array_push($notif_id_array_0, $notif_id);

            $username=$row['username'];
            $fullname=$row['fullname'];
            $user_type=$row['user_type'];
            $off_type=$row['off_type'];
            $datexx=$row['datexx'];
            $timexx=$row['timexx'];
            $action=$row['action'];
            $org_id=$row['org_id'];
            $event_id=$row['event_id'];
            
            $event_name="";
            $table_name_2="tbl_events";
            $column="event_id";
            $value=$event_id;
            $get_eventData=get_where_custom_header_special($table_name_2, $column, $value);
            
            foreach ($get_eventData as $key => $row)
            {
                $event_name=$row['event_name'];
            }

            $seen_data=get_where_custom('tbl_seen', 'user_id', $this->session->userdata('idxx'));
            $notif_id_array=array();
            foreach ($seen_data as $key => $row)
            {
                $notif_id_2=$row['notif_id'];
                array_push($notif_id_array, $notif_id_2);
                
            }
            
        }
    }

    $notif_id_array_diff=array_diff($notif_id_array_0, $notif_id_array);
    
    // for ($i=0; $i < count($notif_id_array_diff); $i++)
    foreach ($notif_id_array_diff as $value)
    {
        // if (isset($notif_id_array_diff[$i]))
        // {
    ?>
            <!-- <a href="<?=base_url()?>test/test_add/<?=$notif_id_array_diff[$i]?>"><?=$notif_id_array_diff[$i]?></a> -->
            <a href="<?=base_url()?>test/test_add/<?=$value?>"><?=$value?></a>
    <?php
        // }
    }
    $notif_id_array_diff_count=count($notif_id_array_diff);
    echo "<br>";
    

    if ($notif_id_array_diff_count > 0)
    {
        print_r($notif_id_array_diff);
        $notif_id_range=array_combine(range(0, ($notif_id_array_diff_count-1)), array_values($notif_id_array_diff));
        $notif_id_range_count=count($notif_id_range);
        echo "<br><h1>NOTIF RANGE</h1>";
        print_r($notif_id_range);
        echo "<h1>Unread notifications: ".$notif_id_range_count."</h1>";
    } else
    {
        echo "No new notifications";
    }
    
    
?>
    
    