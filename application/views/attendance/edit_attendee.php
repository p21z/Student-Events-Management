<?php
$table_name = "tbl_attendee";
$column = "attendance_id";

$get_userData = get_where_custom($table_name, $column, $url_id);

//fetch result and pass it  to an array
    foreach ($get_userData as $key => $row) {
        $attendance_id=$row['attendance_id'];
        $event_id=$row['event_id'];
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
    
    }
    
?>

<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            EDIT ATTENDEE
        </div>

        <form method="post" action="<?=base_url()?>attendance/edit_attendee">
            
                <div class="" style="">

                <input type="text" name="url_id" class="form-control form-control-user add-input" autocomplete=off placeholder="event_id" value=<?=$event_id?> required hidden>

                <input type="text" name="url_id_2" class="form-control form-control-user add-input" autocomplete=off placeholder="event_id" value=<?=$user_id?> required hidden>

                <input type="text" name="url_id_3" class="form-control form-control-user add-input" autocomplete=off placeholder="event_id" value=<?=$attendance_id?> required hidden>

                <input type="text" name="username" class="form-control form-control-user add-input" autocomplete=off placeholder="username" value=<?=$username?> required readonly>

                <input type="text" name="fullname" class="form-control form-control-user add-input" autocomplete=off placeholder="event_id" value= <?php echo $firstname."&nbsp;".$lastname;?> required readonly>

                <select type="text" name="statusxx" class="form-control form-control-user add-input" autocomplete=off required>    
                    <option value="">Status</option>
                    <option value="Present">Present</option>
                    <option value="Late">Late</option>
                    <option value="Absent">Absent</option>
                </select>

            </div>

            <br>
            <br>

            <!-- BUTTONS -->
            <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:%; margin-top:3%; margin-bottom: 5%">
                <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                </span>
                <span class="text">
                    EDIT USER
                </span>
            </button>
            
            &nbsp;&nbsp;
            <a href="<?=base_url()?>attendance/all/<?=$event_id?>" class="btn btn-danger btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
                <span class="icon text-white-50">
                    <i class="fas fa-ban"></i>
                </span>
                <span class="text">
                    CANCEL
                </span>
            </a>

        
        <form>

    </div>

</div>
