<?php

    date_default_timezone_set('Asia/Singapore');
    $auto_absent_counter=time();

    $table_name="tbl_events";
    $column="event_id";
    // $value=$url_id;
    $value=$url_id;

    $events_data=get_where_custom($table_name, $column, $value);

    foreach ($events_data as $key => $row)
    {
        $event_id=$row['event_id'];
        $end_date=$row['end_date'];

        echo $end_date. "<br>" ;
    }

    if( $auto_absent_counter>strtotime("+1 day", strtotime($end_date)) )
    {
        $visitor_data=get_where_double_and('tbl_visitor', 'statusxx', "", "event_id", $url_id);

        foreach($visitor_data as $key => $row)
        {
            $visitor_id=$row['visitor_id'];
            
            $visitor_editedValues = array
            (
                'statusxx' => "Absent"
            );

            update_from($visitor_editedValues, $visitor_id, 'tbl_visitor', 'visitor_id');
        }
    }
    

?>