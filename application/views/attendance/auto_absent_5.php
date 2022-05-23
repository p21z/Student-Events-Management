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
        // echo $event_id ." ". strtotime($end_date)." | ". $auto_absent_counter;
    }

    if( $auto_absent_counter>strtotime("+1 day", strtotime($end_date)) )
    {
        // echo "andito ka";
        $count_attendee_data=count_where('tbl_attendee', 'event_id', $url_id);
        // echo "<br> attendance_id with event_id count: ".$count_attendee_data;

        if  ($count_attendee_data==0)
        {
            // create attendee data with event_id as url_id and status is absent.
            // GET USER_ID OF STUDENTS AND OFFICERS
            $user_data=get_where_double("tbl_users", "user_type", "Officer", "user_type", "Student");

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

            }
        } else
        {
            
            $user_data=get_where_double("tbl_users", "user_type", "Officer", "user_type", "Student");

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
                $dont_add_absent_data=get_where_double('tbl_attendee', 'statusxx', 'Absent', 'event_id', $url_id);
                echo $count_where_double_and=count_where_double_and('tbl_attendee', 'statusxx', 'Absent', 'event_id', $url_id). "<br>";
                
                foreach ($dont_add_absent_data as $key => $row)
                {

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

                $attendee_data=auto_absent_specific_3($user_id);

                

                }


            }
        }
        
    }