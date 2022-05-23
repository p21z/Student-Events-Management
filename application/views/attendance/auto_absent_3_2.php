<?php
    $table_name="tbl_attendee";
    $column="statusxx";
    $value="Absent";

    $user_data=get_where_not_custom($table_name, $column, $value);

    foreach ($user_data as $key => $row)
    {
        $attendance_id=$row['attendance_id'];
        $event_id=$row['event_id'];
        $user_id=$row['user_id'];

        $statusxx=$row['statusxx'];

        // echo "FROM ALL ATTENDEE DATA -->";
        // echo "attendance_id: ".$attendance_id." ";
        // echo "event_id: ".$event_id." ";
        // echo "user_id: ".$user_id." ";
        // echo "statusxx: ".$statusxx." ";
        // echo "<br>";

        
        $user_data_2=get_where_double_and($table_name, "event_id", $event_id, "user_id", $user_id);
        foreach ($user_data_2 as $key => $row)
        {
            $attendance_id=$row['attendance_id'];
            $event_id=$row['event_id'];
            $user_id=$row['user_id'];
            $statusxx=$row['statusxx'];

            // echo "FROM SPECIFIC ATTENDEE DATA -->";
            // echo "attendance_id: ".$attendance_id." ";
            // echo "event_id: ".$event_id." ";
            // echo "user_id: ".$user_id." ";
            // echo "statusxx: ".$statusxx." ";
            // echo "<br>";

            if ($statusxx==="Absent")
            {
                $table_name = "tbl_attendee";
                $column = "attendance_id";
                // echo "<br><br> attendee ".$attendance_id." deleted ";
                delete_from($attendance_id, $table_name, $column);
            }
        }
        // echo "<hr>";

        
    }