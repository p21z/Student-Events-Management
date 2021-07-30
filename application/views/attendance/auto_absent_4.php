<?php
    date_default_timezone_set('Asia/Singapore');
    $auto_absent_counter=time();
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

    if( $auto_absent_counter>strtotime("+1 day", strtotime($end_date)) )
    {
     
        $attendee_data=get_where_double_and('tbl_attendee', 'event_id', $url_id, 'statusxx', '');
        foreach ($attendee_data as $key => $row)
        {
            $attendance_id=$row['attendance_id'];
            // update to absent

            $user_editedValues = array('statusxx' => "Absent");
            update_from($user_editedValues, $attendance_id, 'tbl_attendee', 'attendance_id');
            print_r($user_editedValues);
        }
    }