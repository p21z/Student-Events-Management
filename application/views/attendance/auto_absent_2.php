<?php
$recorded=array();

    $auto_absent_counter=date("Y-m-d",time());
    // GET EVENTS->END_DATE
    $table_name="tbl_events";
    $column="event_id";
    $value=$url_id;

    $events_data=get_where_custom($table_name, $column, $value);

    foreach ($events_data as $key => $row)
    {
        $event_id=$row['event_id'];
        $end_date=$row['end_date'];
    }

    if($auto_absent_counter>$end_date)
    {
        $table_name="tbl_users";
        $column1="user_type";
        $value1="Officer";
        $value2="Student";

        $user_data=get_where_double($table_name, $column1, $value1, $column1, $value2);

        foreach ($user_data as $key => $row)
            {
                $user_id=$row['user_id'];
                $username=$row['username'];

                $table_name="tbl_attendee";
                $column1="user_id";
                $column2="event_id";

                // if (tbl_user.user_id != tbl_attendee.user_id){absent}

                $attendee_data=get_where_double_and($table_name, $column1, $user_id, $column2, $url_id);

                foreach ($attendee_data as $key => $row)
                {
                    $attendance_id=$row['attendance_id'];
                    $event_id=$row['event_id'];
                    $user_id_2=$row['user_id'];
                    $username_2=$row['username'];
                    echo "went here";
                    if ($user_id==$user_id_2)
                    {
                        echo "went here";
                        array_push($recorded, $user_id);
                    }
                }
            }
    
    print_r($recorded);
    }