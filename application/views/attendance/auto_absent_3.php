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

        // echo $event_id;
    }
    
    // echo strtotime("+1 day", strtotime($end_date));
    // echo "auto_absent_counter= ".date('d-m-Y H:i:s',$auto_absent_counter)."<br>";
    // echo "end_date= ".strtotime("+1 day", strtotime($end_date))."<br>";
    // echo "end_date= ".date('d-m-Y H:i:s', strtotime("+1 day", strtotime($end_date)))."<br>";


    if( $auto_absent_counter>strtotime("+1 day", strtotime($end_date)) )
    {
        // FIX#1 FOR REFRESH ENTRY OF AUTO ABSENT -> FAULTY, DELETES $EVENT_ID
        // $table_name = "tbl_attendee";
        // $column = "statusxx";
        // $value= "Absent";
        // // echo $table_name." ".$column." ".$value;
        // echo "<br><br> attendee deleted ";
        // echo delete_from_special("Absent", $table_name, "statusxx");

        // GET USER_ID OF STUDENTS AND OFFICERS
        $table_name="tbl_users";
        $column="user_type";
        $user_data=get_where_double($table_name, $column, "Officer", $column, "Student");

        foreach ($user_data as $key => $row)
        {
            $user_id=$row['user_id'];

            $username=$row['username'];
            $firstname=$row['firstname'];
            $lastname=$row['lastname'];

            $email=$row['email'];
            $contact_no=$row['contact_no'];

            $user_type=$row['user_type'];

            $year_level=$row['year_level'];
            $program=$row['program'];
            $section=$row['section'];

            // ADDING AN ABSENT RECORD FOR EVERY USER_ID OF STUDENTS AND OFFICERS
            
            $table_name = "tbl_attendee";
            $column = "statusxx";

            $attendee_data = array(

                'event_id' => $url_id,
                'user_id' => $user_id,

                'username' => $username,
                'firstname' => $firstname,
                'lastname' => $lastname,

                'email' => $email,
                'contact_no' => $contact_no,
                
                'user_type' => $user_type,
                
                'year_level' => $year_level,
                'program' => $program,
                'section' => $section,

                'statusxx' => "Absent"
                
            );
            // print_r($attendee_data);
            // echo "<br><br> attendee add ";
            insert($attendee_data, $table_name);
            

            // FIX#1 FOR MULTIPLE ENTRY OF AUTO ABSENT
            $table_name = "tbl_attendee";
            $column = "event_id";
            // echo "<br><br> attendee deleted ";
            delete_from(0, $table_name, $column);


        }
    }