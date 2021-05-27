<?php

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

    // IF AUTO_ABSENT_COUNTER > END_TIME, AUTO ABSENT USERS(STUDENTS, OFFICERS) W/OUT ATTENDEE RECORDS

    // echo $auto_absent_counter. "<br>";
    // echo $end_date;

    // $table_name="tbl_attendee";
    // $column="event_id";
    // $attendee_data=get_where_custom($table_name, $column, $url_id);

    // foreach ($attendee_data as $key => $row)
    // {
    //     $attendance_id=$row['attendance_id'];
    //     $event_id=$row['event_id'];
    //     $user_id=$row['user_id'];
    //     $username=$row['username'];

    //     echo "<br>".$user_id."<br>";
    //     $table_name="tbl_users";
    //     $column1="user_id";

    //     $user_data=get_where_not_custom($table_name, $column1, $user_id);
    //     foreach ($user_data as $key => $row)
    //     {
    //         $user_id=$row['user_id'];

    //         echo "<br>".$user_id;
    //     }

    //     echo "<br>-----------------------";

    // }
        




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

                // echo "<br>".$username;
                // echo "<br>".$user_id;

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

                    // echo "<br>".$user_id." ".$user_id_2;

                    if ($user_id==$user_id_2)
                    {
                        $table_name="tbl_users";
                        $column="user_id";

                        $user_editedValues = array(
                            'matcher' => 1
                        );

                        update_from($user_editedValues, $user_id, $table_name, $column);
                    }
                }

            }

// echo "<hr>";

        $table_name="tbl_users";
        $column1="user_type";
        $value1="Officer";
        $column2="user_type";
        $value2="Student";
        $column3="matcher";
        $value3=1;
        
        $user_data=get_where_triple_hybrid_not($table_name, $column1, $value1, $column2, $value2, $column3, $value3);

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

                $table_name_2="tbl_users";
                $column="user_id";

                $user_editedValues = array(
                    'matcher' => 1
                );

                update_from($user_editedValues, $user_id, $table_name_2, $column);

                $table_name = "tbl_attendee";

                $attendee_data = array(

                    'event_id' => $event_id,
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
                // echo "<br><br>";
                

                echo insert($attendee_data, $table_name);
                
                

            }

            $table_name="tbl_users";

            $user_data=get($table_name);

            foreach ($user_data as $key => $row)
            {
                $user_id=$row['user_id'];
                $column="user_id";

                $user_editedValues = array(
                    
                    'matcher' => ""
                    
                );

                update_from($user_editedValues, $user_id, $table_name, $column);
            }

    }

    

