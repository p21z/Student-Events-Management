<?php
    $table_name="tbl_attendee";
    $column="event_id";
    $value=$url_id;

    $user_data=get_where_custom($table_name, $column, $value);

    foreach ($user_data as $key => $row)
    {
        $attendance_id=$row['attendance_id'];
        $event_id=$row['event_id'];
        $user_id=$row['user_id'];

        $statusxx=$row['statusxx'];

        
        

        if ($statusxx==="Absent")
        {
            $table_name = "tbl_attendee";
            $column = "attendance_id";
            delete_from($attendance_id, $table_name, $column);
        }
        // echo "<br>";
        
    }