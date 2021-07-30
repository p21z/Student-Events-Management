<?php

// 

$pre_events_data=get_latest_0('tbl_events', 'event_id');

foreach ($pre_events_data as $key => $row)
{
    $event_id=$row['event_id'];
}

$events_data=get_where_custom('tbl_events', 'event_id', $event_id);

foreach ($events_data as $key => $row)
{
    $prog_base=$row['prog_base'];
}

if ($prog_base==="Y")
{

    $inc_data=get_where_custom('tbl_inclusion', 'org_id', 51);

    foreach ($inc_data as $key => $row)
    {
        $inc_id=$row['inc_id'];
        $org_id=$row['org_id'];
        $prog_id=$row['prog_id'];

        echo $inc_id."-".$org_id."-".$prog_id."-";

        $prog_data=get_where_custom('tbl_programs', 'prog_id', $prog_id);

        foreach ($prog_data as $key => $row)
        {
            $prog_name=$row['prog_name'];
            $prog_abbrv=$row['prog_abbrv'];
            
            echo $prog_abbrv."<br>";

            $stud_data=get_where_custom('tbl_users', 'program', $prog_abbrv);

            foreach ($stud_data as $key => $row)
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

                $statusxx=$row['statusxx'];

                echo $username."<br>";

                // ADDING AN ABSENT RECORD FOR EVERY USER_ID OF STUDENTS AND OFFICERS
                
                $table_name = "tbl_attendee";
                $column = "statusxx";

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

                    // 'statusxx' => "Absent"
                    
                );
                // print_r($attendee_data);
                // echo "<br><br> attendee add ";
                insert($attendee_data, $table_name);
            }
        }
    }

} else 
{
    $stud_data=get_where_double('tbl_users', 'user_type', 'Officer', 'user_type','Student');

    foreach ($stud_data as $key => $row)
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

        $statusxx=$row['statusxx'];

        $table_name = "tbl_attendee";
        $column = "statusxx";

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

            // 'statusxx' => "Absent"
            
        );
        // print_r($attendee_data);
        // echo "<br><br> attendee add ";
        insert($attendee_data, $table_name);

    }

}
// 






?>