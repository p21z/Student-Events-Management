<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            ADD ATTENDANCE
        </div>

        <form method="post" action="<?=base_url()?>attendance/add_attendee_details/<?=$url_id?>/<?=$url_id_2?>">
 
            <div class="" style="">

                <input type="text" name="url_id" class="form-control form-control-user add-input" autocomplete=off placeholder="event_id" value=<?=$url_id?> required hidden>

                <input type="text" name="url_id_2" class="form-control form-control-user add-input" autocomplete=off placeholder="event_id" value=<?=$url_id_2?> required hidden>

                <?php
                $table_name="tbl_users";
                $column="user_id";

                $user_data=get_where_custom($table_name, $column, $url_id_2);

                foreach ($user_data as $key => $row)
                {
                    $user_id=$row['user_id'];

                    $username=$row['username'];
                    $firstname=$row['firstname'];
                    $lastname=$row['lastname'];
                }
                echo $lastname;
                ?>

                <input type="text" name="username" class="form-control form-control-user add-input" autocomplete=off placeholder="username" value=<?=$username?> required readonly>

                <input type="text" name="fullname" class="form-control form-control-user add-input" autocomplete=off placeholder="event_id" value= <?php echo $firstname."&nbsp;".$lastname;?> required readonly>

                <select type="text" name="statusxx" class="form-control form-control-user add-input" autocomplete=off required>
                <option value="">Status</option>
                <option value="Present">Present</option>
                <option value="Late">Late</option>
                <option value="Absent">Absent</option>
                </select>

                <!-- <div class="input-group mb-3" style="width:40%; margin-left:3%; margin-top:3%;">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Organization Logo</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="org_logo" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div> -->

            </div>

            <br>
            <br>

            <!-- BUTTONS -->
            <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:%; margin-top:3%; margin-bottom: 5%">
                <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                </span>
                <span class="text">
                    NEXT
                </span>
            </button>
            
            &nbsp;&nbsp;
            <a href="<?=base_url()?>attendance/add_attendee/<?=$url_id?>" class="btn btn-danger btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
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
